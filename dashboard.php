<?php
/**
 * PhishGuard - User Dashboard
 * Displays personalized detection history, quiz performance, and risk distribution.
 */

define('PHISHGUARD_APP', true);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/functions.php';

// Authentication guard
require_login('login.php');

$user = get_logged_in_user();
$pageTitle = 'Dashboard – PhishGuard';
$extraScripts = ['dashboard.js'];

$pdo = get_db_connection();
$detectionHistory = [];
$quizHistory = [];
$stats = [
    'total_scans'   => 0,
    'total_quizzes' => 0,
    'latest_rank'   => 'N/A',
    'highest_pct'   => 0.0,
    'risk_counts'   => [
        'LOW'       => 0,
        'MODERATE'  => 0,
        'HIGH'      => 0,
        'VERY HIGH' => 0,
    ],
];

if ($pdo) {
    try {
        // Fetch detection history for this user only
        $detStmt = $pdo->prepare("
            SELECT id, url, score, risk_level, summary, created_at 
            FROM detection_history 
            WHERE user_id = :uid 
            ORDER BY created_at DESC 
            LIMIT 50
        ");
        $detStmt->execute([':uid' => $user['id']]);
        $detectionHistory = $detStmt->fetchAll();

        $stats['total_scans'] = count($detectionHistory);

        // Calculate risk distribution
        foreach ($detectionHistory as $row) {
            $lvl = strtoupper($row['risk_level']);
            if (isset($stats['risk_counts'][$lvl])) {
                $stats['risk_counts'][$lvl]++;
            }
        }

        // Fetch quiz history for this user only
        $quizStmt = $pdo->prepare("
            SELECT id, score, total_questions, percentage, rank_title, created_at 
            FROM quiz_results 
            WHERE user_id = :uid 
            ORDER BY created_at DESC 
            LIMIT 25
        ");
        $quizStmt->execute([':uid' => $user['id']]);
        $quizHistory = $quizStmt->fetchAll();

        $stats['total_quizzes'] = count($quizHistory);

        if (!empty($quizHistory)) {
            $stats['latest_rank'] = $quizHistory[0]['rank_title'];
            foreach ($quizHistory as $q) {
                if ((float)$q['percentage'] > $stats['highest_pct']) {
                    $stats['highest_pct'] = (float)$q['percentage'];
                }
            }
        }
    } catch (PDOException $e) {
        error_log("Dashboard query error: " . $e->getMessage());
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3">
    <div>
        <span class="badge bg-info-subtle text-info px-3 py-1 fw-bold small mb-1">Authenticated Space</span>
        <h1 class="fw-bold display-6 mb-0">Welcome back, <?= e($user['username']) ?>!</h1>
        <p class="text-muted small mb-0">User Account: <?= e($user['email']) ?></p>
    </div>
    <div class="d-flex gap-2">
        <a href="<?= base_url('detector.php') ?>" class="btn btn-cyber-primary btn-sm">
            <i class="bi bi-search me-1"></i> Scan New URL
        </a>
        <a href="<?= base_url('quiz.php') ?>" class="btn btn-cyber-outline btn-sm">
            <i class="bi bi-patch-question me-1"></i> Take Quiz
        </a>
    </div>
</div>

<!-- Key Stat Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3 col-6">
        <div class="cyber-card p-3 text-center">
            <div class="text-muted small mb-1">Total URLs Scanned</div>
            <div class="display-6 fw-bold text-info"><?= (int)$stats['total_scans'] ?></div>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="cyber-card p-3 text-center">
            <div class="text-muted small mb-1">Quizzes Completed</div>
            <div class="display-6 fw-bold text-warning"><?= (int)$stats['total_quizzes'] ?></div>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="cyber-card p-3 text-center">
            <div class="text-muted small mb-1">Current Defense Rank</div>
            <div class="fs-5 fw-bold text-success text-truncate mt-2"><?= e($stats['latest_rank']) ?></div>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="cyber-card p-3 text-center">
            <div class="text-muted small mb-1">Highest Quiz Score</div>
            <div class="display-6 fw-bold text-primary"><?= number_format($stats['highest_pct'], 0) ?>%</div>
        </div>
    </div>
</div>

<!-- Risk Distribution Visualizer -->
<div class="cyber-card p-4 mb-4">
    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
        <i class="bi bi-pie-chart-fill text-info"></i>
        <span>URL Risk Distribution</span>
    </h5>
    
    <?php if ($stats['total_scans'] > 0): ?>
        <div class="row g-3">
            <?php foreach ($stats['risk_counts'] as $riskLevel => $count): 
                $pct = round(($count / $stats['total_scans']) * 100);
                $barColor = match($riskLevel) {
                    'LOW' => 'bg-success',
                    'MODERATE' => 'bg-warning',
                    'HIGH' => 'bg-danger',
                    'VERY HIGH' => 'bg-danger border border-light',
                    default => 'bg-secondary'
                };
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-dark rounded border border-secondary">
                        <div class="d-flex justify-content-between small mb-1">
                            <span class="fw-semibold"><?= e($riskLevel) ?> RISK</span>
                            <span class="text-muted"><?= $count ?> (<?= $pct ?>%)</span>
                        </div>
                        <div class="progress" style="height: 6px; background-color: rgba(255, 255, 255, 0.1);">
                            <div class="progress-bar <?= $barColor ?> risk-bar-fill" role="progressbar" data-pct="<?= $pct ?>" style="width: 0%; transition: width 0.6s ease;"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center text-muted py-3 small">
            <i class="bi bi-info-circle me-1"></i> No URLs analyzed yet. Analyze a URL in the detector to start tracking threat distributions.
        </div>
    <?php endif; ?>
</div>

<!-- Detection History Table -->
<div class="cyber-card p-4 mb-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <h5 class="fw-bold mb-0 d-flex align-items-center gap-2">
            <i class="bi bi-clock-history text-info"></i>
            <span>Your URL Detection History</span>
        </h5>
        <?php if (!empty($detectionHistory)): ?>
            <div style="max-width: 280px;">
                <input type="text" id="historySearchInput" class="form-control form-control-sm" placeholder="Filter history by URL...">
            </div>
        <?php endif; ?>
    </div>

    <?php if (empty($detectionHistory)): ?>
        <div class="text-center py-4 text-muted">
            <i class="bi bi-journal-x fs-1 d-block mb-2 text-secondary"></i>
            <p class="mb-2">No detection records found for this account.</p>
            <a href="<?= base_url('detector.php') ?>" class="btn btn-sm btn-cyber-primary">Scan a Test URL Now</a>
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0" id="detectionHistoryTable">
                <thead class="table-secondary text-dark small">
                    <tr>
                        <th style="width: 18%;">Timestamp</th>
                        <th style="width: 42%;">Target URL</th>
                        <th style="width: 20%;">Score &amp; Level</th>
                        <th style="width: 20%;">Summary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detectionHistory as $row): ?>
                        <tr>
                            <td class="small text-muted font-monospace"><?= e(date('M d, Y H:i', strtotime($row['created_at']))) ?></td>
                            <td class="font-monospace small text-truncate" style="max-width: 320px;" title="<?= e($row['url']) ?>">
                                <span class="text-info"><?= e($row['url']) ?></span>
                            </td>
                            <td><?= render_risk_badge($row['risk_level'], (int)$row['score']) ?></td>
                            <td class="small text-muted text-truncate" style="max-width: 200px;" title="<?= e($row['summary']) ?>">
                                <?= e($row['summary']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<!-- Quiz Performance History Table -->
<div class="cyber-card p-4">
    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
        <i class="bi bi-trophy-fill text-warning"></i>
        <span>Your Quiz Attempts</span>
    </h5>

    <?php if (empty($quizHistory)): ?>
        <div class="text-center py-4 text-muted">
            <i class="bi bi-award fs-1 d-block mb-2 text-secondary"></i>
            <p class="mb-2">You haven't attempted the cybersecurity challenge yet.</p>
            <a href="<?= base_url('quiz.php') ?>" class="btn btn-sm btn-cyber-primary">Take Quiz Challenge</a>
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
                <thead class="table-secondary text-dark small">
                    <tr>
                        <th>Date Completed</th>
                        <th>Score</th>
                        <th>Accuracy</th>
                        <th>Awarded Rank</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($quizHistory as $q): ?>
                        <tr>
                            <td class="small text-muted font-monospace"><?= e(date('M d, Y H:i', strtotime($q['created_at']))) ?></td>
                            <td class="fw-semibold text-info"><?= (int)$q['score'] ?> / <?= (int)$q['total_questions'] ?></td>
                            <td>
                                <span class="badge bg-dark border border-secondary text-warning">
                                    <?= number_format((float)$q['percentage'], 1) ?>%
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-info-subtle text-info border border-info">
                                    <i class="bi bi-patch-check-fill me-1"></i><?= e($q['rank_title']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
