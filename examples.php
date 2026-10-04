<?php
/**
 * PhishGuard - Simulated Phishing Examples
 * Realistic simulated attack templates for educational inspection.
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'Simulated Phishing Examples – PhishGuard';
require_once __DIR__ . '/includes/header.php';
?>

<div class="mb-5 text-center text-md-start">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-warning-subtle text-warning small fw-bold mb-2">
        <i class="bi bi-shield-exclamation"></i> Threat Simulation Lab
    </div>
    <h1 class="fw-bold display-5">Simulated Phishing Case Studies</h1>
    <p class="lead text-muted">
        Inspect five simulated email and SMS lures commonly encountered in the wild. Analyze the psychological triggers, deceptive header details, and masked hyperlink traps.
    </p>
    <div class="alert alert-warning border-warning d-flex align-items-center gap-3">
        <i class="bi bi-exclamation-triangle-fill fs-3 text-warning"></i>
        <div class="small">
            <strong>STRICT EDUCATIONAL NOTICE:</strong> All scenarios below are sanitized, static educational mockups. No real links are functional and no credentials can be entered.
        </div>
    </div>
</div>

<div class="row g-5">

    <!-- Scenario 1: Fake Delivery Message -->
    <div class="col-12" id="scenario-1">
        <div class="cyber-card p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary">
                <h3 class="h5 fw-bold mb-0">
                    <span class="badge bg-danger me-2">SIMULATED EDUCATIONAL EXAMPLE</span>
                    Scenario 1: Fraudulent Parcel Delivery Fee
                </h3>
                <span class="badge bg-secondary">Smishing / E-commerce Vector</span>
            </div>

            <div class="email-client-mockup mb-3">
                <div class="email-client-header">
                    <span class="mac-dot mac-dot-red"></span>
                    <span class="mac-dot mac-dot-yellow"></span>
                    <span class="mac-dot mac-dot-green"></span>
                    <span class="small text-muted font-monospace ms-2">Mail – Package Tracking Notification</span>
                </div>
                <div class="email-body">
                    <div class="border-bottom border-secondary pb-2 mb-3 small text-muted">
                        <div><strong>From:</strong> Global Parcel Express &lt;<span class="text-danger">tracking-alerts398@fast-courier-notification.top</span>&gt;</div>
                        <div><strong>To:</strong> recipient@university.edu</div>
                        <div><strong>Subject:</strong> Action Required: Delivery Exception on Parcel #US-98214</div>
                    </div>
                    <div class="p-3 bg-dark rounded border border-secondary">
                        <p class="fw-bold text-light mb-2">Dear Customer,</p>
                        <p class="small text-light">
                            Your package arrived at our local sorting hub on September 21, but cannot be dispatched to your street address due to an unpaid customs handling fee of <strong>$2.45</strong>.
                        </p>
                        <p class="small text-light">
                            Failure to settle this fee within 24 hours will result in the package being marked abandoned and returned to the sender.
                        </p>
                        <div class="my-3 text-center">
                            <span class="btn btn-danger btn-sm disabled" style="cursor: not-allowed;">
                                Confirm Address &amp; Pay $2.45 Now &raquo;
                            </span>
                            <div class="small font-monospace text-muted mt-1">
                                Hyperlink points to: <span class="text-danger">http://parcel-post-settlement.ru/pay</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Flags Analysis Box -->
            <div class="p-3 bg-dark bg-opacity-75 rounded border border-danger border-opacity-50">
                <h6 class="text-danger fw-bold mb-2"><i class="bi bi-search me-1"></i> Spot the Red Flags:</h6>
                <ul class="small text-muted mb-0 ps-3">
                    <li class="mb-1"><strong class="text-light">Suspicious Sender TLD:</strong> The sender uses a generic <code>.top</code> top-level domain instead of an authentic courier domain (like FedEx or UPS).</li>
                    <li class="mb-1"><strong class="text-light">Artificial Low-Dollar Urgency:</strong> Asking for a nominal amount ($2.45) lowers suspicion, but is used to harvest complete credit card numbers and CVV codes.</li>
                    <li class="mb-0"><strong class="text-light">Mismatched Destination URL:</strong> The link redirects to an unencrypted HTTP Russian TLD (<code>.ru</code>).</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scenario 2: Account Verification -->
    <div class="col-12" id="scenario-2">
        <div class="cyber-card p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary">
                <h3 class="h5 fw-bold mb-0">
                    <span class="badge bg-danger me-2">SIMULATED EDUCATIONAL EXAMPLE</span>
                    Scenario 2: Cloud Account Quota Suspension
                </h3>
                <span class="badge bg-secondary">Cloud Credential Harvester</span>
            </div>

            <div class="email-client-mockup mb-3">
                <div class="email-client-header">
                    <span class="mac-dot mac-dot-red"></span>
                    <span class="mac-dot mac-dot-yellow"></span>
                    <span class="mac-dot mac-dot-green"></span>
                    <span class="small text-muted font-monospace ms-2">Mail – Storage Administrator</span>
                </div>
                <div class="email-body">
                    <div class="border-bottom border-secondary pb-2 mb-3 small text-muted">
                        <div><strong>From:</strong> Cloud Workspace Administrator &lt;<span class="text-danger">admin-support@storage-verification-center.net</span>&gt;</div>
                        <div><strong>To:</strong> student@university.edu</div>
                        <div><strong>Subject:</strong> [CRITICAL] Your mailbox has reached 98.9% capacity</div>
                    </div>
                    <div class="p-3 bg-dark rounded border border-secondary">
                        <p class="small text-light">
                            Your institutional storage account has exceeded its allocated limit. Incoming messages and calendar invitations will be blocked starting today.
                        </p>
                        <div class="progress my-2" style="height: 10px;">
                            <div class="progress-bar bg-danger" style="width: 98%;"></div>
                        </div>
                        <p class="small text-light">
                            To avoid incoming email deletion and validate your student license, verify your credentials immediately.
                        </p>
                        <div class="text-center my-3">
                            <span class="btn btn-warning btn-sm disabled" style="cursor: not-allowed;">
                                Validate Mailbox &amp; Retain Space &raquo;
                            </span>
                            <div class="small font-monospace text-muted mt-1">
                                Hyperlink points to: <span class="text-danger">http://secure-account-example.com/login/verify</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Flags Analysis Box -->
            <div class="p-3 bg-dark bg-opacity-75 rounded border border-danger border-opacity-50">
                <h6 class="text-danger fw-bold mb-2"><i class="bi bi-search me-1"></i> Spot the Red Flags:</h6>
                <ul class="small text-muted mb-0 ps-3">
                    <li class="mb-1"><strong class="text-light">Fear of Data Loss:</strong> Exploits the fear of missing critical academic assignments or emails.</li>
                    <li class="mb-1"><strong class="text-light">External Unaffiliated Domain:</strong> Uses <code>storage-verification-center.net</code> instead of the official college domain.</li>
                    <li class="mb-0"><strong class="text-light">Insecure Protocol:</strong> Targets an HTTP link containing sensitive <code>/login/verify</code> keywords.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scenario 3: Banking Alert -->
    <div class="col-12" id="scenario-3">
        <div class="cyber-card p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary">
                <h3 class="h5 fw-bold mb-0">
                    <span class="badge bg-danger me-2">SIMULATED EDUCATIONAL EXAMPLE</span>
                    Scenario 3: Urgent Fraudulent Transaction Alert
                </h3>
                <span class="badge bg-secondary">Financial Sector Vector</span>
            </div>

            <div class="email-client-mockup mb-3">
                <div class="email-client-header">
                    <span class="mac-dot mac-dot-red"></span>
                    <span class="mac-dot mac-dot-yellow"></span>
                    <span class="mac-dot mac-dot-green"></span>
                    <span class="small text-muted font-monospace ms-2">Mail – Fraud Prevention Division</span>
                </div>
                <div class="email-body">
                    <div class="border-bottom border-secondary pb-2 mb-3 small text-muted">
                        <div><strong>From:</strong> National Reserve Bank &lt;<span class="text-danger">security@192.0.2.10.nip.io</span>&gt;</div>
                        <div><strong>To:</strong> account-holder@example.com</div>
                        <div><strong>Subject:</strong> Suspicious Outbound Wire: $1,420.00 Approved to CryptoExchange</div>
                    </div>
                    <div class="p-3 bg-dark rounded border border-secondary">
                        <p class="small text-light">
                            An outbound transfer of <strong>$1,420.00 USD</strong> was authorized from your checking account on 09/22/2026.
                        </p>
                        <p class="small text-light">
                            If you did NOT authorize this transaction, click below within 15 minutes to dispute and lock the transaction immediately:
                        </p>
                        <div class="text-center my-3">
                            <span class="btn btn-danger btn-sm disabled" style="cursor: not-allowed;">
                                Dispute Transfer &amp; Lock Account &raquo;
                            </span>
                            <div class="small font-monospace text-muted mt-1">
                                Hyperlink points to: <span class="text-danger">http://192.0.2.10/account/login</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Flags Analysis Box -->
            <div class="p-3 bg-dark bg-opacity-75 rounded border border-danger border-opacity-50">
                <h6 class="text-danger fw-bold mb-2"><i class="bi bi-search me-1"></i> Spot the Red Flags:</h6>
                <ul class="small text-muted mb-0 ps-3">
                    <li class="mb-1"><strong class="text-light">Numeric Raw IP Host:</strong> The destination URL uses raw numbers <code>192.0.2.10</code> instead of an authorized bank domain.</li>
                    <li class="mb-1"><strong class="text-light">Shock Value:</strong> Large dollar amount induces immediate panic.</li>
                    <li class="mb-0"><strong class="text-light">Short Time Limit:</strong> Giving 15 minutes prevents the victim from contacting their branch on the telephone.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scenario 4: Prize Notification -->
    <div class="col-12" id="scenario-4">
        <div class="cyber-card p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary">
                <h3 class="h5 fw-bold mb-0">
                    <span class="badge bg-danger me-2">SIMULATED EDUCATIONAL EXAMPLE</span>
                    Scenario 4: E-Commerce Shopping Voucher Winner
                </h3>
                <span class="badge bg-secondary">Greed / Reward Vector</span>
            </div>

            <div class="email-client-mockup mb-3">
                <div class="email-client-header">
                    <span class="mac-dot mac-dot-red"></span>
                    <span class="mac-dot mac-dot-yellow"></span>
                    <span class="mac-dot mac-dot-green"></span>
                    <span class="small text-muted font-monospace ms-2">Mail – Customer Loyalty Program</span>
                </div>
                <div class="email-body">
                    <div class="border-bottom border-secondary pb-2 mb-3 small text-muted">
                        <div><strong>From:</strong> Rewards Rewards &lt;<span class="text-danger">promotions@gift-voucher-claim24.biz</span>&gt;</div>
                        <div><strong>To:</strong> lucky-winner@example.com</div>
                        <div><strong>Subject:</strong> CONGRATULATIONS! You have been selected for a $500 Gift Card!</div>
                    </div>
                    <div class="p-3 bg-dark rounded border border-secondary text-center">
                        <div class="fs-4 fw-bold text-warning mb-2">&#127881; You are Today's Selected Winner! &#127881;</div>
                        <p class="small text-light">
                            As part of our annual customer appreciation lottery, your email was chosen to receive a <strong>$500 shopping voucher</strong>.
                        </p>
                        <span class="btn btn-success btn-sm disabled" style="cursor: not-allowed;">
                            Claim Your Reward in 3 Simple Steps &raquo;
                        </span>
                        <div class="small font-monospace text-muted mt-2">
                            Hyperlink points to: <span class="text-danger">https://short.example/abc123</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Flags Analysis Box -->
            <div class="p-3 bg-dark bg-opacity-75 rounded border border-danger border-opacity-50">
                <h6 class="text-danger fw-bold mb-2"><i class="bi bi-search me-1"></i> Spot the Red Flags:</h6>
                <ul class="small text-muted mb-0 ps-3">
                    <li class="mb-1"><strong class="text-light">Unsolicited Contest:</strong> You cannot win a lottery or raffle that you never entered.</li>
                    <li class="mb-1"><strong class="text-light">Obfuscated Link:</strong> Uses a shortened URL to conceal the malicious credential/credit-card harvesting form.</li>
                    <li class="mb-0"><strong class="text-light">Suspicious TLD:</strong> Sent from a disposable <code>.biz</code> registry.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scenario 5: Password Reset -->
    <div class="col-12" id="scenario-5">
        <div class="cyber-card p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary">
                <h3 class="h5 fw-bold mb-0">
                    <span class="badge bg-danger me-2">SIMULATED EDUCATIONAL EXAMPLE</span>
                    Scenario 5: Corporate Single Sign-On Expiration
                </h3>
                <span class="badge bg-secondary">Workplace / Enterprise Vector</span>
            </div>

            <div class="email-client-mockup mb-3">
                <div class="email-client-header">
                    <span class="mac-dot mac-dot-red"></span>
                    <span class="mac-dot mac-dot-yellow"></span>
                    <span class="mac-dot mac-dot-green"></span>
                    <span class="small text-muted font-monospace ms-2">Mail – Corporate IT Helpdesk</span>
                </div>
                <div class="email-body">
                    <div class="border-bottom border-secondary pb-2 mb-3 small text-muted">
                        <div><strong>From:</strong> IT System Administrator &lt;<span class="text-danger">helpdesk@company-internal-portal.info</span>&gt;</div>
                        <div><strong>To:</strong> employee@company.com</div>
                        <div><strong>Subject:</strong> Mandatory IT Security Notice: Password Expires Today</div>
                    </div>
                    <div class="p-3 bg-dark rounded border border-secondary">
                        <p class="small text-light">
                            Under corporate security compliance policy 4.1, all employee network passwords must be rotated every 90 days. Your current network credentials will expire at 5:00 PM today.
                        </p>
                        <p class="small text-light">
                            To maintain VPN and file share access without interruption, keep your current password by confirming it through the portal below:
                        </p>
                        <div class="text-center my-3">
                            <span class="btn btn-primary btn-sm disabled" style="cursor: not-allowed;">
                                Retain Current Password &raquo;
                            </span>
                            <div class="small font-monospace text-muted mt-1">
                                Hyperlink points to: <span class="text-danger">http://company.com@attacker-portal.net/auth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Flags Analysis Box -->
            <div class="p-3 bg-dark bg-opacity-75 rounded border border-danger border-opacity-50">
                <h6 class="text-danger fw-bold mb-2"><i class="bi bi-search me-1"></i> Spot the Red Flags:</h6>
                <ul class="small text-muted mb-0 ps-3">
                    <li class="mb-1"><strong class="text-light">Authority Exploitation:</strong> Pretending to be company IT helpdesk.</li>
                    <li class="mb-1"><strong class="text-light">Obfuscated @ Symbol:</strong> <code>http://company.com@attacker-portal.net/auth</code>. Browsers ignore everything before <code>@</code> and navigate straight to <code>attacker-portal.net</code>!</li>
                    <li class="mb-0"><strong class="text-light">Contradictory Logic:</strong> Real IT systems never offer a button to "retain your old password" when enforcing mandatory password rotation.</li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- Call to Action -->
<div class="mt-5 text-center cyber-card p-4">
    <h4 class="fw-bold mb-2">Notice Any Patterns in These Scenarios?</h4>
    <p class="text-muted small mb-3">
        Take our 10-question challenge to see if you can detect subtle phishing cues under test conditions.
    </p>
    <a href="<?= base_url('quiz.php') ?>" class="btn btn-cyber-primary">
        <i class="bi bi-patch-question me-1"></i> Take Phishing Quiz
    </a>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
