<?php
/**
 * PhishGuard - Educational URL Heuristic Detector Interface
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'URL Heuristic Analyzer – PhishGuard';
$extraScripts = ['detector.js'];
require_once __DIR__ . '/includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-xl-10">

        <!-- Page Header -->
        <div class="text-center mb-4">
            <span class="badge bg-info-subtle text-info px-3 py-1 rounded-pill fw-bold small mb-2">
                <i class="bi bi-shield-check me-1"></i> Static Heuristic Analysis
            </span>
            <h1 class="fw-bold display-6">Educational URL Risk Analyzer</h1>
            <p class="text-muted mx-auto" style="max-width: 750px;">
                Enter a web address to inspect its structural and lexical characteristics. The engine performs deterministic static analysis against heuristic indicators without visiting or connecting to the target website.
            </p>
        </div>

        <!-- Analyzer Input Card -->
        <div class="cyber-card p-4 p-md-5 mb-4 shadow-lg border-info border-opacity-25">
            <form id="detectorForm" onsubmit="return false;">
                <div class="mb-3">
                    <label for="urlInput" class="form-label fw-bold d-flex justify-content-between align-items-center">
                        <span><i class="bi bi-link-45deg text-info me-1"></i> Target Web Address (URL)</span>
                        <span id="charCounter" class="text-muted small">0 / 2048</span>
                    </label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-dark border-secondary text-info">
                            <i class="bi bi-globe2"></i>
                        </span>
                        <input type="text" class="form-control font-monospace" id="urlInput" placeholder="https://example.com or http://suspicious-domain.com/login" maxlength="2048" autocomplete="off" spellcheck="false" required>
                    </div>
                    <div class="form-text text-muted small">
                        Accepts only <code>http://</code> and <code>https://</code> schemes. Analyzed locally via lexical heuristics.
                    </div>
                </div>

                <!-- Preset Demo URL Buttons -->
                <div class="mb-4">
                    <div class="small text-muted mb-2 fw-semibold">
                        <i class="bi bi-lightning-charge text-warning me-1"></i> Quick Test Demonstration Cases:
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-preset" data-url="https://example.com">
                            <i class="bi bi-check2 me-1"></i> Case 1: example.com (0 / LOW)
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-preset" data-url="http://secure-account-example.com/login/verify">
                            <i class="bi bi-exclamation me-1"></i> Case 2: Insecure Login (30 / MODERATE)
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-preset" data-url="http://192.0.2.10/account/login">
                            <i class="bi bi-exclamation-triangle me-1"></i> Case 3: Raw IP Host (50 / HIGH)
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-preset" data-url="https://short.example/abc123">
                            <i class="bi bi-scissors me-1"></i> Case 4: Shortened URL (15 / LOW)
                        </button>
                    </div>
                </div>

                <!-- Form Action Buttons -->
                <div class="d-flex gap-3">
                    <button type="button" id="analyzeBtn" class="btn btn-cyber-primary btn-lg flex-grow-1">
                        <i class="bi bi-search me-2"></i> Analyze URL
                    </button>
                    <button type="button" id="clearBtn" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="bi bi-x-circle me-1"></i> Clear
                    </button>
                </div>
            </form>

            <!-- Error Banner -->
            <div id="errorContainer" class="alert alert-danger mt-4 d-none" role="alert"></div>

            <!-- Loading Spinner State -->
            <div id="loadingState" class="text-center py-5 d-none">
                <div class="spinner-border text-info mb-3" style="width: 3rem; height: 3rem;" role="status"></div>
                <h5 class="fw-bold">Evaluating Structural Heuristics...</h5>
                <p class="text-muted small">Parsing protocol, authority, hostname tokens, and path parameters.</p>
            </div>
        </div>

        <!-- Result Container -->
        <div id="resultContainer" class="cyber-card p-4 p-md-5 mb-5 d-none">
            <div class="row align-items-center g-4 pb-4 border-bottom border-secondary mb-4">
                <div class="col-md-4 text-center">
                    <div id="scoreCircle" class="score-circle">
                        <span id="scoreValue" class="score-number">0</span>
                        <span class="score-total">/ 100</span>
                    </div>
                    <div id="riskBadge" class="badge fs-6 px-3 py-2">LOW RISK</div>
                </div>

                <div class="col-md-8">
                    <h4 class="fw-bold mb-2">Analysis Summary</h4>
                    <p id="summaryText" class="text-muted mb-3"></p>
                    <div class="p-3 bg-dark rounded border border-secondary font-monospace small text-truncate">
                        <span class="text-muted">Target: </span>
                        <span id="analyzedUrlDisplay" class="text-info fw-bold"></span>
                    </div>
                </div>
            </div>

            <!-- "Why This Score?" Point Breakdown Section -->
            <div class="mb-4">
                <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                    <i class="bi bi-calculator text-info"></i>
                    <span>Why This Score? Heuristic Breakdown</span>
                </h5>
                <div class="table-responsive">
                    <table class="table table-dark table-hover table-bordered mb-0">
                        <thead class="table-secondary text-dark">
                            <tr>
                                <th style="width: 30%;">Evaluated Rule</th>
                                <th style="width: 50%;">Educational Explanation</th>
                                <th style="width: 20%;" class="text-end">Risk Weight</th>
                            </tr>
                        </thead>
                        <tbody id="breakdownTableBody">
                            <!-- Populated dynamically via detector.js -->
                        </tbody>
                        <tfoot>
                            <tr class="table-dark fw-bold border-top border-secondary">
                                <td colspan="2" class="text-end">Total Risk Score (Capped at 100):</td>
                                <td id="breakdownTotal" class="text-end text-info fs-6"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="row g-4">
                <!-- Detected Structural Indicators -->
                <div class="col-lg-6">
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-flag-fill text-warning"></i>
                        <span>Detected Structural Indicators</span>
                    </h5>
                    <ul id="indicatorsList" class="list-group list-group-flush border rounded border-secondary p-2">
                        <!-- Populated via detector.js -->
                    </ul>
                </div>

                <!-- Actionable Recommendations -->
                <div class="col-lg-6">
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-shield-check text-info"></i>
                        <span>Safety Recommendations</span>
                    </h5>
                    <ul id="recommendationsList" class="list-group list-group-flush border rounded border-secondary p-2">
                        <!-- Populated via detector.js -->
                    </ul>
                </div>
            </div>

            <!-- Academic Disclaimer Callout -->
            <div class="mt-4 p-3 bg-dark bg-opacity-50 rounded border border-secondary text-muted small">
                <i class="bi bi-info-circle text-info me-1"></i>
                <strong>Educational Notice:</strong> PhishGuard utilizes static lexical heuristics. It is designed to demonstrate how URL design patterns reflect threat risk. A low score does not guarantee absolute safety; always verify unfamiliar communications independently.
            </div>
        </div>

    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
