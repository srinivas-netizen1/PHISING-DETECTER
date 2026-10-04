<?php
/**
 * PhishGuard - Awareness Module
 * Comprehensive 12-topic phishing educational guide.
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'Phishing Awareness Guide – PhishGuard';
require_once __DIR__ . '/includes/header.php';
?>

<div class="mb-5 text-center text-md-start">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-info-subtle text-info small fw-bold mb-2">
        <i class="bi bi-mortarboard-fill"></i> Educational Cybersecurity Curriculum
    </div>
    <h1 class="fw-bold display-5">Phishing Awareness &amp; Defense Guide</h1>
    <p class="lead text-muted">
        A structured, topic-by-topic curriculum explaining how phishing attacks are orchestrated, how social engineering manipulates human psychology, and how to spot telltale indicators before clicking.
    </p>
</div>

<!-- Table of Contents Navigation Chips -->
<div class="cyber-card p-3 mb-5">
    <div class="fw-bold mb-2 small text-uppercase text-muted"><i class="bi bi-list-nested me-1"></i> Quick Topic Index:</div>
    <div class="d-flex flex-wrap gap-2">
        <a href="#topic-1" class="btn btn-sm btn-outline-secondary">1. What is Phishing?</a>
        <a href="#topic-2" class="btn btn-sm btn-outline-secondary">2. Attack Lifecycle</a>
        <a href="#topic-3" class="btn btn-sm btn-outline-secondary">3. Common Techniques</a>
        <a href="#topic-4" class="btn btn-sm btn-outline-secondary">4. Suspicious URLs</a>
        <a href="#topic-5" class="btn btn-sm btn-outline-secondary">5. Fake Login Portals</a>
        <a href="#topic-6" class="btn btn-sm btn-outline-secondary">6. Urgency &amp; Fear</a>
        <a href="#topic-7" class="btn btn-sm btn-outline-secondary">7. Dangerous Attachments</a>
        <a href="#topic-8" class="btn btn-sm btn-outline-secondary">8. Social Engineering</a>
        <a href="#topic-9" class="btn btn-sm btn-outline-secondary">9. Email Warning Signs</a>
        <a href="#topic-10" class="btn btn-sm btn-outline-secondary">10. SMS Phishing (Smishing)</a>
        <a href="#topic-11" class="btn btn-sm btn-outline-secondary">11. QR Phishing (Quishing)</a>
        <a href="#topic-12" class="btn btn-sm btn-outline-secondary">12. Incident Response</a>
    </div>
</div>

<div class="row g-4">

    <!-- Topic 1: What is phishing? -->
    <div class="col-lg-6" id="topic-1">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-primary fs-5 px-3 py-2">01</span>
                <h3 class="h4 fw-bold mb-0">What is Phishing?</h3>
            </div>
            <p class="text-muted">
                Phishing is a deceptive form of cyberattack where an adversary impersonates a legitimate, trustworthy entity—such as a bank, university portal, cloud service provider, or senior colleague—to trick individuals into divulging sensitive credentials, financial details, or confidential information.
            </p>
            <div class="p-3 bg-dark rounded border border-secondary small">
                <strong class="text-info"><i class="bi bi-info-circle me-1"></i> Core Concept:</strong>
                Phishing targets the <em>human firewall</em>. Instead of searching for complex operating system flaws, attackers simply trick users into willingly handing over authorization tokens or passwords.
            </div>
        </div>
    </div>

    <!-- Topic 2: How phishing works -->
    <div class="col-lg-6" id="topic-2">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-primary fs-5 px-3 py-2">02</span>
                <h3 class="h4 fw-bold mb-0">How Phishing Works: The Attack Lifecycle</h3>
            </div>
            <p class="text-muted">
                Every successful phishing campaign progresses through four distinct operational phases:
            </p>
            <ol class="text-muted small ps-3 mb-0">
                <li class="mb-2"><strong>Reconnaissance:</strong> The attacker harvests target emails, executive names, and corporate logos from public websites and social media.</li>
                <li class="mb-2"><strong>Weaponization:</strong> The attacker clones a target login interface and registers look-alike domains (typosquatting).</li>
                <li class="mb-2"><strong>Delivery:</strong> Deceptive emails, text messages, or malicious QR codes are dispatched containing urgent call-to-actions.</li>
                <li class="mb-0"><strong>Harvesting &amp; Exploitation:</strong> The submitted credentials are logged on attacker servers and immediately exploited or sold on dark web forums.</li>
            </ol>
        </div>
    </div>

    <!-- Topic 3: Common phishing techniques -->
    <div class="col-lg-6" id="topic-3">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-info text-dark fs-5 px-3 py-2">03</span>
                <h3 class="h4 fw-bold mb-0">Common Phishing Techniques</h3>
            </div>
            <div class="accordion accordion-flush" id="accordionTech">
                <div class="accordion-item bg-transparent text-light border-secondary">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-transparent text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech1">
                            <i class="bi bi-broadcast text-info me-2"></i> Mass Phishing (Bulk Spam)
                        </button>
                    </h2>
                    <div id="tech1" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                        <div class="accordion-body small text-muted">
                            Broadcasted to tens of thousands of random recipients without customization. Relies on statistical probability that some recipients happen to hold an account with the impersonated brand.
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-transparent text-light border-secondary">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-transparent text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech2">
                            <i class="bi bi-crosshair text-danger me-2"></i> Spear Phishing
                        </button>
                    </h2>
                    <div id="tech2" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                        <div class="accordion-body small text-muted">
                            Highly targeted attacks focused on a specific individual or department, citing accurate internal projects, vendor names, or employee IDs to maximize trust.
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-transparent text-light border-secondary">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-transparent text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech3">
                            <i class="bi bi-gem text-warning me-2"></i> Whaling (Executive Impersonation)
                        </button>
                    </h2>
                    <div id="tech3" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                        <div class="accordion-body small text-muted">
                            Aimed at C-suite executives, directors, or finance personnel to authorize urgent, fraudulent wire transfers or disclose employee tax records.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Topic 4: Suspicious URLs -->
    <div class="col-lg-6" id="topic-4">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-info text-dark fs-5 px-3 py-2">04</span>
                <h3 class="h4 fw-bold mb-0">Deconstructing Suspicious URLs</h3>
            </div>
            <p class="text-muted small">
                Phishers rely on visual trickery to make deceptive URLs look authentic at a quick glance:
            </p>
            <div class="table-responsive small">
                <table class="table table-dark table-bordered table-sm mb-0">
                    <thead>
                        <tr class="table-secondary text-dark">
                            <th>Deception Type</th>
                            <th>Example</th>
                            <th>Real Host</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Subdomain Spoof</td>
                            <td><code>paypal.com.verify-notice.net</code></td>
                            <td class="text-danger fw-bold">verify-notice.net</td>
                        </tr>
                        <tr>
                            <td>Typosquatting</td>
                            <td><code>m1crosoft-support.com</code></td>
                            <td class="text-danger fw-bold">m1crosoft-support.com</td>
                        </tr>
                        <tr>
                            <td>Raw IP Host</td>
                            <td><code>http://192.0.2.10/login</code></td>
                            <td class="text-danger fw-bold">192.0.2.10 (Numeric)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-3 small text-muted">
                <strong>Rule of Thumb:</strong> Always inspect the host directly before the first single forward slash <code>/</code>.
            </div>
        </div>
    </div>

    <!-- Topic 5: Fake login pages -->
    <div class="col-lg-6" id="topic-5">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-warning text-dark fs-5 px-3 py-2">05</span>
                <h3 class="h4 fw-bold mb-0">Fake Login Pages (Credential Harvesters)</h3>
            </div>
            <p class="text-muted">
                Attackers use automated tools to scrape the HTML, CSS, and imagery of authentic authentication portals (e.g. Microsoft 365, Google Workspace, GitHub).
            </p>
            <ul class="text-muted small ps-3">
                <li class="mb-2"><strong>Visual exactness:</strong> Identical brand logos, buttons, and animations.</li>
                <li class="mb-2"><strong>Form action redirection:</strong> When you hit "Sign In", your username and password are POSTed directly to the attacker's database before redirecting you to the authentic site to mask the theft.</li>
                <li class="mb-0"><strong>Inoperable auxiliary links:</strong> Footer links like "Terms of Service" or "Privacy Policy" often reload the same page or link to dead anchors (<code>#</code>).</li>
            </ul>
        </div>
    </div>

    <!-- Topic 6: Urgency and fear tactics -->
    <div class="col-lg-6" id="topic-6">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-warning text-dark fs-5 px-3 py-2">06</span>
                <h3 class="h4 fw-bold mb-0">Psychological Urgency &amp; Fear Tactics</h3>
            </div>
            <p class="text-muted">
                Humans are psychologically wired to act hastily when confronted with threat or sudden reward. Phishers deliberately fabricate artificial emergencies:
            </p>
            <div class="p-3 bg-danger bg-opacity-10 border border-danger rounded small text-light">
                <i class="bi bi-alarm-fill text-danger me-2"></i>
                <em>"Your account will be permanently deactivated in 2 hours unless you confirm your identity immediately."</em>
            </div>
            <p class="text-muted small mt-3 mb-0">
                <strong>Defensive Mindset:</strong> Legitimate institutions almost never provide arbitrary 2-hour ultimatums for routine account matters. Stop, breathe, and verify independently.
            </p>
        </div>
    </div>

    <!-- Topic 7: Suspicious attachments -->
    <div class="col-lg-6" id="topic-7">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-danger fs-5 px-3 py-2">07</span>
                <h3 class="h4 fw-bold mb-0">Suspicious Attachments &amp; Payloads</h3>
            </div>
            <p class="text-muted small">
                Never double-click email attachments claiming to be invoices, receipts, or shipping manifests unless verified:
            </p>
            <ul class="text-muted small ps-3">
                <li class="mb-2"><strong>Executables disguised as documents:</strong> <code>Invoice_March2026.pdf.exe</code> (utilizing double extensions).</li>
                <li class="mb-2"><strong>Macro-enabled Office documents:</strong> Prompts instructing you to "Enable Content" or "Enable Editing", which triggers malicious VBA macro execution.</li>
                <li class="mb-2"><strong>ISO or IMG container files:</strong> Used to bypass operating system Mark-of-the-Web (MOTW) security flags.</li>
                <li class="mb-0"><strong>Encrypted ZIP archives:</strong> The attacker gives the password in the email body to prevent automated gateway antivirus scanners from inspecting the archive contents.</li>
            </ul>
        </div>
    </div>

    <!-- Topic 8: Social engineering -->
    <div class="col-lg-6" id="topic-8">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-danger fs-5 px-3 py-2">08</span>
                <h3 class="h4 fw-bold mb-0">The Art of Social Engineering</h3>
            </div>
            <p class="text-muted">
                Social engineering relies on cognitive biases and human behavioral traits rather than software bugs:
            </p>
            <div class="row g-2 small text-muted">
                <div class="col-6">
                    <div class="p-2 border border-secondary rounded">
                        <strong class="text-info">Authority:</strong> Pretending to be police, IT admin, or CEO.
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-2 border border-secondary rounded">
                        <strong class="text-info">Scarcity:</strong> "Only 3 gift vouchers left—claim yours!"
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-2 border border-secondary rounded">
                        <strong class="text-info">Fear / Penalty:</strong> "You have an outstanding tax warrant."
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-2 border border-secondary rounded">
                        <strong class="text-info">Helpfulness:</strong> Exploiting natural desire to resolve an issue.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Topic 9: Email warning signs -->
    <div class="col-lg-6" id="topic-9">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-purple-subtle text-info fs-5 px-3 py-2">09</span>
                <h3 class="h4 fw-bold mb-0">Email Warning Signs Checklist</h3>
            </div>
            <p class="text-muted small">
                Train your eyes to scan for these top warning signs in every unsolicited email:
            </p>
            <ul class="list-unstyled small text-muted">
                <li class="mb-2 d-flex align-items-start gap-2">
                    <i class="bi bi-x-octagon text-danger mt-1"></i>
                    <span><strong>Display Name Mismatch:</strong> The name says "Bank Support" but the actual email address is <code>helpdesk3819@mail-temp.xyz</code>.</span>
                </li>
                <li class="mb-2 d-flex align-items-start gap-2">
                    <i class="bi bi-x-octagon text-danger mt-1"></i>
                    <span><strong>Generic Greetings:</strong> Using "Dear Customer" or "Valued Client" instead of your actual registered name.</span>
                </li>
                <li class="mb-2 d-flex align-items-start gap-2">
                    <i class="bi bi-x-octagon text-danger mt-1"></i>
                    <span><strong>Spelling &amp; Grammatical Irregularities:</strong> Clumsy sentence structures often resulting from automated translations.</span>
                </li>
                <li class="mb-0 d-flex align-items-start gap-2">
                    <i class="bi bi-x-octagon text-danger mt-1"></i>
                    <span><strong>Mismatched Hyperlinks:</strong> Hovering your mouse over the link reveals a completely different destination address.</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Topic 10: SMS phishing (Smishing) -->
    <div class="col-lg-6" id="topic-10">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-purple-subtle text-info fs-5 px-3 py-2">10</span>
                <h3 class="h4 fw-bold mb-0">SMS Phishing (Smishing)</h3>
            </div>
            <p class="text-muted">
                Smishing delivers phishing links directly through SMS text messages, exploiting the higher trust and speed associated with mobile notifications.
            </p>
            <div class="p-3 bg-dark rounded border border-secondary font-monospace small mb-3">
                <span class="text-muted">[SMS Notification]</span><br>
                "POST-ALERT: Your parcel package #GB8372 cannot be delivered due to an unpaid $1.85 customs fee. Update your address at: <code>http://tiny.cc/post-fee-customs</code>"
            </div>
            <p class="text-muted small mb-0">
                Mobile browsers truncate address bars to fit small screens, making it much harder for victims to see the full malicious domain.
            </p>
        </div>
    </div>

    <!-- Topic 11: QR phishing (Quishing) -->
    <div class="col-lg-6" id="topic-11">
        <div class="cyber-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-purple-subtle text-info fs-5 px-3 py-2">11</span>
                <h3 class="h4 fw-bold mb-0">QR Code Phishing (Quishing)</h3>
            </div>
            <p class="text-muted">
                Quick Response (QR) codes are optical machine-readable matrices. Because humans cannot read encoded pixels with the naked eye, attackers exploit them:
            </p>
            <ul class="text-muted small ps-3">
                <li class="mb-2"><strong>Physical Tampering:</strong> Sticking malicious QR code stickers over authentic ones on municipal parking meters, restaurant menus, and charging stations.</li>
                <li class="mb-2"><strong>Email Gateway Evasion:</strong> Embedding the phishing link inside an image QR code in an email so traditional email text scanners cannot inspect the link string.</li>
                <li class="mb-0"><strong>Countermeasure:</strong> Always use a QR scanner app that previews the destination URL before opening it in the mobile browser.</li>
            </ul>
        </div>
    </div>

    <!-- Topic 12: How to respond safely -->
    <div class="col-lg-6" id="topic-12">
        <div class="cyber-card p-4 h-100 border-success border-opacity-50">
            <div class="d-flex align-items-center gap-3 mb-3">
                <span class="badge bg-success fs-5 px-3 py-2">12</span>
                <h3 class="h4 fw-bold mb-0">How to Respond Safely (Defense Playbook)</h3>
            </div>
            <p class="text-muted small">
                Follow this standard 4-step emergency protocol if you encounter a suspected phishing attempt:
            </p>
            <div class="d-flex flex-column gap-2 small">
                <div class="p-2 rounded bg-dark border border-secondary">
                    <strong class="text-success">1. Disengage:</strong> Do NOT click links, do NOT download attachments, and do NOT reply to the sender.
                </div>
                <div class="p-2 rounded bg-dark border border-secondary">
                    <strong class="text-success">2. Independent Verification:</strong> Open a new browser tab and navigate manually to the official known website URL or phone number.
                </div>
                <div class="p-2 rounded bg-dark border border-secondary">
                    <strong class="text-success">3. Report:</strong> Forward the email to your organization's IT security team or reporting mailbox (e.g. <code>phishing@company.com</code>).
                </div>
                <div class="p-2 rounded bg-dark border border-secondary">
                    <strong class="text-success">4. Contain:</strong> If credentials were entered, change the password immediately and invalidate existing active sessions.
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Navigation to Detector Callout -->
<div class="mt-5 text-center cyber-card p-4">
    <h4 class="fw-bold mb-2">Put Your URL Knowledge into Practice</h4>
    <p class="text-muted small mb-3">
        See how structural features like protocol, IP hosts, and path keywords are scored in our Educational Detector.
    </p>
    <a href="<?= base_url('detector.php') ?>" class="btn btn-cyber-primary">
        <i class="bi bi-search me-1"></i> Open URL Heuristic Analyzer
    </a>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
