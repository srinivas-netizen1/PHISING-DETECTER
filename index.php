<?php
/**
 * PhishGuard - Home Page
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'PhishGuard – Phishing Awareness and Detection Platform';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="py-5 text-center text-lg-start">
    <div class="row align-items-center g-5">
        <div class="col-lg-7">
            <div class="hero-badge mb-3">
                <i class="bi bi-shield-check"></i> Academic Cybersecurity Project
            </div>
            <h1 class="hero-title">
                PhishGuard<br>
                <span style="font-size: 0.7em; font-weight: 600; opacity: 0.95;">Learn. Detect. Stay Safe.</span>
            </h1>
            <p class="lead text-muted mb-4 pe-lg-4">
                An educational phishing awareness and URL analysis platform. Explore how deceptive links are engineered, test suspicious URLs with static heuristic rules, and enhance your digital defense skills.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                <a href="<?= base_url('detector.php') ?>" class="btn btn-cyber-primary btn-lg d-flex align-items-center gap-2">
                    <i class="bi bi-search"></i>
                    <span>Analyze a URL</span>
                </a>
                <a href="<?= base_url('awareness.php') ?>" class="btn btn-cyber-outline btn-lg d-flex align-items-center gap-2">
                    <i class="bi bi-journal-text"></i>
                    <span>Learn About Phishing</span>
                </a>
            </div>
            <div class="mt-4 pt-2 d-flex align-items-center gap-4 text-muted small justify-content-center justify-content-lg-start">
                <div><i class="bi bi-shield-slash me-1 text-info"></i> Zero Network Probing</div>
                <div><i class="bi bi-cpu me-1 text-info"></i> Static Heuristics</div>
                <div><i class="bi bi-patch-check me-1 text-info"></i> Cybersecurity Awareness</div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="cyber-card p-4 shadow-lg border-info border-opacity-25">
                <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom border-secondary">
                    <div class="d-flex align-items-center gap-2">
                        <div class="mac-dot mac-dot-red"></div>
                        <div class="mac-dot mac-dot-yellow"></div>
                        <div class="mac-dot mac-dot-green"></div>
                        <span class="ms-2 small text-muted font-monospace">heuristic_scanner.php</span>
                    </div>
                    <span class="badge bg-info-subtle text-info small">Lexical Analysis</span>
                </div>
                <div class="p-3 bg-dark rounded border border-secondary mb-3 font-monospace small">
                    <div class="text-secondary">// Sample static inspection rule</div>
                    <div class="text-info">&gt; Target: <span class="text-warning">http://secure-account-example.com/login/verify</span></div>
                    <div class="text-light mt-2">&bull; Insecure HTTP Protocol: <span class="text-danger">+15 pts</span></div>
                    <div class="text-light">&bull; Keyword-Hyphenated Domain: <span class="text-danger">+5 pts</span></div>
                    <div class="text-light">&bull; Sensitive Path Query: <span class="text-danger">+10 pts</span></div>
                    <hr class="border-secondary my-2">
                    <div class="text-warning fw-bold">&gt; Calculated Score: 30 / 100 [MODERATE RISK]</div>
                </div>
                <p class="small text-muted mb-0">
                    Transparent rule scoring lets you see exactly how deceptive URL characteristics trigger defensive warning indicators.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Feature Cards Section -->
<section class="py-5">
    <div class="text-center mb-5">
        <span class="badge bg-info-subtle text-info px-3 py-2 text-uppercase fw-bold mb-2">Platform Capabilities</span>
        <h2 class="fw-bold">Designed for Defense &amp; Education</h2>
        <p class="text-muted">Explore the four core learning modules included in PhishGuard.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="cyber-card h-100 p-4 d-flex flex-column">
                <div class="workflow-icon mb-3">
                    <i class="bi bi-book"></i>
                </div>
                <h4 class="h5 fw-bold mb-2">Phishing Awareness</h4>
                <p class="text-muted small flex-grow-1">
                    Master the 12 critical tactics used by cybercriminals, from brand impersonation to psychological urgency and deceptive email headers.
                </p>
                <a href="<?= base_url('awareness.php') ?>" class="small fw-semibold mt-3 text-info">
                    Read Module <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="cyber-card h-100 p-4 d-flex flex-column">
                <div class="workflow-icon mb-3 text-cyan">
                    <i class="bi bi-shield-shaded"></i>
                </div>
                <h4 class="h5 fw-bold mb-2">URL Analyzer</h4>
                <p class="text-muted small flex-grow-1">
                    Submit any web address to inspect protocol encryption, IP hosts, subdomain depth, punycode, and obfuscated query parameters.
                </p>
                <a href="<?= base_url('detector.php') ?>" class="small fw-semibold mt-3 text-info">
                    Analyze URL <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="cyber-card h-100 p-4 d-flex flex-column">
                <div class="workflow-icon mb-3 text-warning">
                    <i class="bi bi-patch-question"></i>
                </div>
                <h4 class="h5 fw-bold mb-2">Interactive Quiz</h4>
                <p class="text-muted small flex-grow-1">
                    Test your security instincts with 10 real-world scenario questions evaluated securely by our server-side grading engine.
                </p>
                <a href="<?= base_url('quiz.php') ?>" class="small fw-semibold mt-3 text-info">
                    Start Challenge <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="cyber-card h-100 p-4 d-flex flex-column">
                <div class="workflow-icon mb-3 text-success">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4 class="h5 fw-bold mb-2">Safety Center</h4>
                <p class="text-muted small flex-grow-1">
                    Actionable defense blueprints covering Multi-Factor Authentication, browser hygiene, and an educational client-side password entropy checker.
                </p>
                <a href="<?= base_url('safety.php') ?>" class="small fw-semibold mt-3 text-info">
                    Explore Guidelines <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Phishing Matters Section -->
<section class="py-5">
    <div class="cyber-card p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <span class="badge bg-danger-subtle text-danger px-3 py-1 mb-2 fw-semibold">The Human Element</span>
                <h2 class="fw-bold mb-3">Why Phishing Awareness Matters</h2>
                <p class="text-muted">
                    Over 80% of reported enterprise cybersecurity breaches begin with a phishing lure or stolen credentials. Firewalls, endpoint detectors, and intrusion prevention systems cannot protect an organization if a user is tricked into willingly typing their password into a malicious replica portal.
                </p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-check2-circle text-info fs-5"></i>
                        <span><strong>Exploits Trust:</strong> Phishers masquerade as trusted banks, bosses, or package couriers.</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-check2-circle text-info fs-5"></i>
                        <span><strong>Bypasses Firewalls:</strong> Delivered directly to legitimate user inboxes and SMS messaging apps.</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-check2-circle text-info fs-5"></i>
                        <span><strong>Precursor to Ransomware:</strong> Credential theft allows attackers to establish persistent persistence inside private networks.</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 rounded bg-dark border border-secondary text-center">
                            <div class="display-6 fw-bold text-info mb-1">3.4B+</div>
                            <div class="small text-muted">Daily Phishing Emails Worldwide</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded bg-dark border border-secondary text-center">
                            <div class="display-6 fw-bold text-warning mb-1">91%</div>
                            <div class="small text-muted">Of Cyberattacks Start via Phishing</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded bg-dark border border-secondary text-center">
                            <div class="display-6 fw-bold text-danger mb-1">&lt; 15 min</div>
                            <div class="small text-muted">Average Time to First Victim Click</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded bg-dark border border-secondary text-center">
                            <div class="display-6 fw-bold text-success mb-1">100%</div>
                            <div class="small text-muted">Avoidable with Critical Verification</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Educational Workflow Section -->
<section class="py-5">
    <div class="text-center mb-5">
        <span class="badge bg-purple-subtle text-info px-3 py-2 text-uppercase fw-bold mb-2">Learning Methodology</span>
        <h2 class="fw-bold">How PhishGuard Empowers Students</h2>
        <p class="text-muted">A structured 4-step progressive learning cycle.</p>
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-3 col-6">
            <div class="workflow-step h-100">
                <div class="workflow-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <h5 class="fw-bold">1. Learn</h5>
                <p class="text-muted small mb-0">Study 12 structured social engineering modules and deception mechanisms.</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="workflow-step h-100">
                <div class="workflow-icon text-info">
                    <i class="bi bi-search"></i>
                </div>
                <h5 class="fw-bold">2. Analyze</h5>
                <p class="text-muted small mb-0">Dissect suspicious link components using deterministic heuristic rules.</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="workflow-step h-100">
                <div class="workflow-icon text-warning">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h5 class="fw-bold">3. Test</h5>
                <p class="text-muted small mb-0">Evaluate realistic email simulations and complete the server-graded challenge.</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="workflow-step h-100">
                <div class="workflow-icon text-success">
                    <i class="bi bi-trophy"></i>
                </div>
                <h5 class="fw-bold">4. Improve</h5>
                <p class="text-muted small mb-0">Track your personal awareness ranking and detection logs on your dashboard.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center">
    <div class="cyber-card p-5 border-info border-opacity-50">
        <h3 class="fw-bold mb-3">Ready to Put Your Phishing Instincts to the Test?</h3>
        <p class="text-muted mb-4 mx-auto" style="max-width: 650px;">
            Test one of our 4 documented live heuristic test cases or take the 10-question phishing awareness quiz now.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="<?= base_url('detector.php') ?>" class="btn btn-cyber-primary btn-lg">Launch URL Detector</a>
            <a href="<?= base_url('quiz.php') ?>" class="btn btn-cyber-outline btn-lg">Take the Quiz</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
