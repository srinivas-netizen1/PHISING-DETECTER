<?php
/**
 * PhishGuard - About PhishGuard
 * Educational Cybersecurity Awareness & Detection Platform
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'About – PhishGuard';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Header Section -->
<div class="mb-5 text-center text-md-start">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-purple-subtle text-info small fw-bold mb-2">
        <i class="bi bi-shield-check"></i> Educational Cybersecurity Platform
    </div>
    <h1 class="fw-bold display-5">About PhishGuard</h1>
    <p class="lead text-muted">
        PhishGuard is an educational cybersecurity awareness platform designed to help users understand phishing and recognize suspicious characteristics commonly found in potentially malicious URLs.
    </p>
</div>

<!-- Project Overview & Objective Card -->
<div class="cyber-card p-4 p-md-5 mb-5 shadow-lg border-info border-opacity-25" id="overview">
    <div class="row g-4 align-items-center">
        <div class="col-lg-8">
            <h2 class="fw-bold mb-3">Project Objective</h2>
            <p class="text-muted">
                The objective of PhishGuard is to improve phishing awareness and help users make safer decisions when encountering suspicious links. In modern cyber attacks, human deception—social engineering—is often the primary entry vector. By demonstrating how malicious actors construct deceptive URLs and craft fraudulent communications, PhishGuard empowers everyday internet users and cybersecurity learners to spot danger before falling victim.
            </p>
            <h5 class="text-info mt-4 mb-2"><i class="bi bi-bullseye me-2"></i>Platform Purpose</h5>
            <p class="text-muted mb-3">
                PhishGuard helps users build practical cybersecurity intuition through hands-on education:
            </p>
            <div class="row g-2">
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Understand phishing attacks
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Recognize suspicious URL patterns
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Learn common phishing indicators
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Explore phishing examples
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Improve cybersecurity awareness
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-2 text-light small py-1">
                        <i class="bi bi-check2-circle text-info"></i> Develop safer online browsing habits
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-2 pt-4">
                <span class="badge bg-dark-subtle text-info border border-info px-3 py-2">HTML5 / CSS3</span>
                <span class="badge bg-dark-subtle text-light border border-secondary px-3 py-2">JavaScript</span>
                <span class="badge bg-dark-subtle text-light border border-secondary px-3 py-2">Bootstrap 5</span>
                <span class="badge bg-dark-subtle text-light border border-secondary px-3 py-2">PHP 8+</span>
                <span class="badge bg-dark-subtle text-light border border-secondary px-3 py-2">MySQL / MariaDB</span>
                <span class="badge bg-dark-subtle text-light border border-secondary px-3 py-2">Apache Web Server</span>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="p-4 bg-dark rounded border border-secondary">
                <i class="bi bi-shield-lock text-info display-3 mb-2 d-block"></i>
                <div class="fw-bold text-light">Cybersecurity Education</div>
                <div class="small text-muted mt-1">Interactive Heuristic Learning</div>
                <div class="badge bg-success mt-3 py-2 px-3">100% Native Architecture</div>
            </div>
        </div>
    </div>
</div>

<!-- Core Features Section -->
<div class="mb-5" id="features">
    <div class="text-center mb-4">
        <span class="badge bg-info-subtle text-info px-3 py-1 rounded-pill fw-bold small mb-2">
            <i class="bi bi-grid-fill"></i> Capabilities
        </span>
        <h2 class="fw-bold display-6">Core Features</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">
            A complete defensive cybersecurity education ecosystem designed for interactive learning and practical risk evaluation.
        </p>
    </div>

    <div class="row g-3">
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-journal-text"></i></div>
                <h5 class="fw-bold text-light mb-2">Phishing Awareness</h5>
                <p class="text-muted small mb-0">In-depth modules covering credential harvesting, social engineering tactics, urgency exploits, and defense mechanisms.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-search"></i></div>
                <h5 class="fw-bold text-light mb-2">Educational URL Analysis</h5>
                <p class="text-muted small mb-0">Inspects URL lexical patterns, provides instant risk scoring from 0 to 100, and explains detected suspicious indicators.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-envelope-exclamation"></i></div>
                <h5 class="fw-bold text-light mb-2">Phishing Examples</h5>
                <p class="text-muted small mb-0">Simulated real-world email lures with interactive "Spot the Red Flags" overlays illustrating common social engineering traps.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-patch-question"></i></div>
                <h5 class="fw-bold text-light mb-2">Interactive Quiz</h5>
                <p class="text-muted small mb-0">10-question cybersecurity challenge with server-side evaluation, automated scoring, answer explanations, and skill ranks.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-shield-check"></i></div>
                <h5 class="fw-bold text-light mb-2">Online Safety Guidance</h5>
                <p class="text-muted small mb-0">Actionable advice across 8 cybersecurity defense pillars including password hygiene, 2FA, browser security, and incident response.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-person-badge"></i></div>
                <h5 class="fw-bold text-light mb-2">User Authentication</h5>
                <p class="text-muted small mb-0">Secure registration with real-time password strength evaluation, Bcrypt password hashing, and session management.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-clock-history"></i></div>
                <h5 class="fw-bold text-light mb-2">Detection History</h5>
                <p class="text-muted small mb-0">Registered users can access personal logs of past URL analyses with full score breakdowns and risk categorization.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-trophy"></i></div>
                <h5 class="fw-bold text-light mb-2">Quiz Result Tracking</h5>
                <p class="text-muted small mb-0">Tracks performance over time on the personal dashboard with historical accuracy scores, completion dates, and ranks.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-aspect-ratio"></i></div>
                <h5 class="fw-bold text-light mb-2">Responsive Interface</h5>
                <p class="text-muted small mb-0">Fully responsive design crafted with Bootstrap 5, optimized for mobile phones (390px), tablets (768px), and desktop viewports.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cyber-card p-4 h-100">
                <div class="text-info fs-3 mb-2"><i class="bi bi-circle-half"></i></div>
                <h5 class="fw-bold text-light mb-2">Dark / Light Theme</h5>
                <p class="text-muted small mb-0">Persistent theme toggling with CSS custom variables, enabling seamless viewing comfort across all lighting environments.</p>
            </div>
        </div>
    </div>
</div>

<!-- URL Detection Architecture & System Layer -->
<div class="row g-4 mb-5" id="architecture">
    <div class="col-lg-6">
        <div class="cyber-card p-4 h-100">
            <h4 class="fw-bold mb-3 d-flex align-items-center gap-2">
                <i class="bi bi-cpu text-info"></i>
                <span>Educational URL Detection</span>
            </h4>
            <p class="text-muted small">
                The PhishGuard detector performs <strong>static, lexical analysis</strong> of URL string characteristics. It evaluates syntax and structural properties mathematically without executing active web requests.
            </p>
            <p class="text-muted small mb-2">Indicators evaluated by the detector engine include:</p>
            <ul class="text-muted small ps-3 mb-3">
                <li><strong class="text-light">HTTP vs HTTPS:</strong> Flags insecure unencrypted transport.</li>
                <li><strong class="text-light">Raw IP Addresses:</strong> Detects numeric IP hosts (e.g. <code>192.0.2.10</code>) used to bypass DNS.</li>
                <li><strong class="text-light">Suspicious URL Structure:</strong> Analyzes excessive length (&gt;75 chars) and excessive subdomains.</li>
                <li><strong class="text-light">Unusual Ports:</strong> Detects non-standard web ports (e.g. 8443, 8080).</li>
                <li><strong class="text-light">Suspicious Keywords:</strong> Flags sensitive tokens like <code>login</code>, <code>verify</code>, <code>secure</code>, and <code>banking</code>.</li>
                <li><strong class="text-light">Excessive Encoding:</strong> Identifies hex percent-encoding obfuscations (<code>%20</code>, <code>%2f</code>).</li>
                <li><strong class="text-light">URL Shorteners:</strong> Flags services (e.g. Bitly, TinyURL) hiding true destinations.</li>
                <li><strong class="text-light">Punycode Spoofing:</strong> Uncovers internationalized homograph domains (<code>xn--</code>).</li>
                <li><strong class="text-light">Suspicious Path Patterns:</strong> Detects executable extensions (<code>.exe</code>, <code>.scr</code>) and <code>@</code> credential delimiters.</li>
            </ul>
            <div class="p-2 bg-dark rounded border border-secondary small text-muted font-monospace">
                <span class="text-info">Risk Classification:</span> Low (0-20) | Moderate (21-45) | High (46-70) | Very High (71-100)
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="cyber-card p-4 h-100" id="security">
            <h4 class="fw-bold mb-3 d-flex align-items-center gap-2">
                <i class="bi bi-shield-shaded text-success"></i>
                <span>Built-in Security Controls</span>
            </h4>
            <p class="text-muted small">
                PhishGuard incorporates robust, real-world defensive security mechanisms across every tier of the application:
            </p>
            <ul class="list-unstyled small text-muted mb-0">
                <li class="mb-3 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                    <div>
                        <strong class="text-light">Secure Password Hashing:</strong> User passwords are never stored in plaintext or reversible formats. The system uses PHP's native <code>password_hash()</code> with bcrypt and validates hashes with <code>password_verify()</code>.
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                    <div>
                        <strong class="text-light">Prepared Statements (PDO):</strong> All database interactions utilize parameterized PDO queries. Dynamic string interpolation into SQL is strictly avoided, preventing SQL injection vulnerabilities.
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                    <div>
                        <strong class="text-light">CSRF Protection:</strong> All state-changing form submissions and JSON APIs enforce cryptographic 32-byte tokens generated via <code>random_bytes(32)</code> and verified with timing-safe <code>hash_equals()</code>.
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                    <div>
                        <strong class="text-light">Session Security:</strong> Session management enforces <code>HttpOnly</code> and <code>SameSite=Lax</code> cookie flags, with automatic session ID regeneration on login to prevent session fixation.
                    </div>
                </li>
                <li class="mb-0 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                    <div>
                        <strong class="text-light">Strict Input Validation &amp; Output Escaping:</strong> Server-side validation rules enforce data integrity, while all dynamic output is sanitized using <code>htmlspecialchars()</code> to thwart Cross-Site Scripting (XSS).
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Technology Stack Section -->
<div class="cyber-card p-4 p-md-5 mb-5 shadow-lg border-secondary" id="technology">
    <h4 class="fw-bold mb-3 d-flex align-items-center gap-2">
        <i class="bi bi-stack text-info"></i>
        <span>Technology Stack</span>
    </h4>
    <p class="text-muted small">
        PhishGuard is implemented with standard web technologies, adhering to modern software engineering standards:
    </p>
    <div class="row g-3 small text-muted">
        <div class="col-md-4">
            <div class="p-3 bg-dark rounded border border-secondary h-100">
                <strong class="text-light d-block mb-1"><i class="bi bi-code-slash text-info me-1"></i> Frontend Layer</strong>
                HTML5 semantic markup, CSS3 custom variables with light/dark theming, Bootstrap 5 UI framework, and vanilla JavaScript for real-time reactivity without heavy client libraries.
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-dark rounded border border-secondary h-100">
                <strong class="text-light d-block mb-1"><i class="bi bi-server text-info me-1"></i> Backend &amp; Server</strong>
                Native PHP 8+ handling request routing, lexical heuristic algorithms, server-side quiz evaluation, session security, and RESTful JSON API endpoints running on Apache.
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-dark rounded border border-secondary h-100">
                <strong class="text-light d-block mb-1"><i class="bi bi-database text-info me-1"></i> Persistence Layer</strong>
                MySQL / MariaDB relational database with InnoDB storage engine, foreign key constraints, and parameterized queries executed through PHP Data Objects (PDO).
            </div>
        </div>
    </div>
</div>

<!-- Limitations & Responsible Use Notice -->
<div class="cyber-card p-4 p-md-5 mb-5 border-warning border-opacity-50" id="limitations">
    <h4 class="fw-bold mb-3 text-warning d-flex align-items-center gap-2">
        <i class="bi bi-exclamation-triangle-fill"></i>
        <span>Detector Limitations &amp; Educational Scope</span>
    </h4>
    <p class="text-muted small">
        PhishGuard is an educational URL-analysis tool and is not a replacement for professional threat-intelligence platforms, antivirus software, browser security systems, or security professionals.
    </p>
    <p class="text-muted small">
        A low-risk result does not guarantee that a website is safe, and a high-risk result does not by itself prove that a website is malicious.
    </p>
    <div class="row g-3 small text-muted mt-1">
        <div class="col-md-6">
            <div class="p-3 bg-dark rounded border border-secondary h-100">
                <strong class="text-light d-block mb-1">&bull; Static Lexical Analysis Only</strong>
                The engine inspects only the characters and structure of the submitted URL string. It does not perform real-time threat intelligence lookups, DNS reputation checks, malware scanning, or live website inspection.
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 bg-dark rounded border border-secondary h-100">
                <strong class="text-light d-block mb-1">&bull; Evolving Threat Tactics</strong>
                Attackers frequently acquire valid TLS certificates and use legitimate cloud platforms for malicious campaigns. Lexical analysis is one educational layer and should always be combined with multi-factor authentication and vigilant verification.
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
