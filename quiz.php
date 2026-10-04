<?php
/**
 * PhishGuard - Interactive Phishing Awareness Challenge
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'Cybersecurity Challenge Quiz – PhishGuard';
$extraScripts = ['quiz.js'];
require_once __DIR__ . '/includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-xl-9 col-lg-10">

        <!-- Page Header -->
        <div class="text-center mb-4">
            <span class="badge bg-purple-subtle text-info px-3 py-1 rounded-pill fw-bold small mb-2">
                <i class="bi bi-patch-question-fill me-1"></i> Interactive Knowledge Test
            </span>
            <h1 class="fw-bold display-6">Phishing Defense Challenge</h1>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Evaluate your practical ability to identify deceptive emails, spoofed URLs, social engineering tricks, and emerging threats like Smishing and Quishing.
            </p>
        </div>

        <!-- Quiz Container Card -->
        <div id="quizCard" class="cyber-card p-4 p-md-5 mb-5 shadow-lg border-info border-opacity-25">
            <!-- Progress Header -->
            <div class="d-flex justify-content-between align-items-center mb-2 small">
                <span id="quizProgressText" class="fw-semibold text-info">Question 1 of 10</span>
                <span class="text-muted">Server-Evaluated</span>
            </div>
            <div class="progress mb-4" style="height: 6px; background-color: rgba(255, 255, 255, 0.1);">
                <div id="quizProgressBar" class="progress-bar bg-info" role="progressbar" style="width: 10%; transition: width 0.3s ease;"></div>
            </div>

            <!-- Dynamic Question Container (Rendered by quiz.js) -->
            <div id="questionContainer">
                <!-- Populated via quiz.js -->
            </div>

            <!-- Quiz Navigation Controls -->
            <div class="d-flex justify-content-between align-items-center pt-3 border-top border-secondary">
                <button type="button" id="prevQuestionBtn" class="btn btn-outline-secondary" disabled>
                    <i class="bi bi-arrow-left me-1"></i> Previous
                </button>

                <div>
                    <button type="button" id="nextQuestionBtn" class="btn btn-cyber-outline">
                        Next <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                    <button type="button" id="submitQuizBtn" class="btn btn-cyber-primary d-none">
                        <i class="bi bi-send-check me-1"></i> Submit Quiz
                    </button>
                </div>
            </div>
        </div>

        <!-- Quiz Results Container (Initially Hidden) -->
        <div id="quizResultsContainer" class="d-none">
            <div class="cyber-card p-4 p-md-5 mb-4 text-center border-info border-opacity-50">
                <span class="badge bg-info-subtle text-info px-3 py-1 mb-2">Evaluation Complete</span>
                <h2 class="fw-bold mb-3">Your Cybersecurity Ranking</h2>

                <div class="my-4">
                    <div id="quizRankDisplay" class="badge fs-4 px-4 py-2 bg-info">Security Sentinel</div>
                </div>

                <div class="row justify-content-center g-4 my-3">
                    <div class="col-sm-4">
                        <div class="p-3 bg-dark rounded border border-secondary">
                            <div class="small text-muted mb-1">Score</div>
                            <div id="quizScoreDisplay" class="display-6 fw-bold text-info">0 / 10</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-dark rounded border border-secondary">
                            <div class="small text-muted mb-1">Accuracy</div>
                            <div id="quizPctDisplay" class="display-6 fw-bold text-warning">0%</div>
                        </div>
                    </div>
                </div>

                <!-- Rank Threshold Explanation -->
                <div class="p-3 bg-dark bg-opacity-50 rounded border border-secondary text-muted small mx-auto mb-4" style="max-width: 650px;">
                    <strong class="text-light">Rank Hierarchy:</strong><br>
                    <span class="text-success fw-bold">&bull; 90%+ PhishGuard Master</span> | 
                    <span class="text-info fw-bold">&bull; 70%+ Security Sentinel</span> | 
                    <span class="text-warning fw-bold">&bull; 50%+ Cyber Defender</span> | 
                    <span class="text-danger fw-bold">&bull; &lt;50% Security Recruit</span>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <button type="button" id="retakeQuizBtn" class="btn btn-cyber-primary">
                        <i class="bi bi-arrow-repeat me-1"></i> Retake Challenge
                    </button>
                    <?php if (is_logged_in()): ?>
                        <a href="<?= base_url('dashboard.php') ?>" class="btn btn-cyber-outline">
                            <i class="bi bi-speedometer2 me-1"></i> View in Dashboard
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('register.php') ?>" class="btn btn-cyber-outline">
                            <i class="bi bi-person-plus me-1"></i> Register to Save Progress
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Detailed Question-by-Question Review -->
            <div class="mb-4">
                <h4 class="fw-bold mb-3 d-flex align-items-center gap-2">
                    <i class="bi bi-card-checklist text-info"></i>
                    <span>Detailed Performance Review &amp; Explanations</span>
                </h4>
                <div id="quizReviewContainer">
                    <!-- Populated dynamically via quiz.js -->
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
