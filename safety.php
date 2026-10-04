<?php
/**
 * PhishGuard - Cybersecurity Safety Center
 * Defense guidelines and interactive client-side password entropy evaluator.
 */

define('PHISHGUARD_APP', true);
$pageTitle = 'Cybersecurity Safety Center – PhishGuard';
require_once __DIR__ . '/includes/header.php';
?>

<div class="mb-5 text-center text-md-start">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-success-subtle text-success small fw-bold mb-2">
        <i class="bi bi-shield-lock-fill"></i> Defensive Cyber Hygiene
    </div>
    <h1 class="fw-bold display-5">Cybersecurity Safety Center</h1>
    <p class="lead text-muted">
        Essential defensive strategies to fortify your personal accounts, prevent identity theft, and secure your digital perimeter against social engineering.
    </p>
</div>

<!-- Interactive Client-Side Password Strength Checker -->
<div class="cyber-card p-4 p-md-5 mb-5 border-info border-opacity-50 shadow-lg">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <span class="badge bg-info-subtle text-info px-3 py-1 mb-2">Interactive Tool</span>
            <h3 class="fw-bold mb-2">Educational Password Strength Evaluator</h3>
            <p class="text-muted small">
                Evaluate password entropy, character diversity, and resistance to brute-force dictionary attacks.
            </p>
            <div class="alert alert-dark border-secondary small text-muted mb-0">
                <i class="bi bi-shield-check text-success me-1"></i>
                <strong>Privacy Guarantee:</strong> This analysis executes <strong>100% client-side in your browser's local memory</strong>. No passwords are ever stored or sent over the network.
            </div>
        </div>

        <div class="col-lg-6">
            <div class="p-3 bg-dark rounded border border-secondary">
                <label for="pwdInput" class="form-label small fw-bold text-light">Type a sample password to test:</label>
                <div class="input-group mb-2">
                    <input type="password" id="pwdInput" class="form-control" placeholder="e.g. Tr0ub4dor&3_2026!" autocomplete="off">
                    <button class="btn btn-outline-secondary" type="button" id="togglePwdVisibility">
                        <i class="bi bi-eye" id="togglePwdIcon"></i>
                    </button>
                </div>

                <!-- Strength Meter Bar -->
                <div class="progress mb-2" style="height: 8px; background-color: rgba(255, 255, 255, 0.1);">
                    <div id="pwdStrengthBar" class="progress-bar" role="progressbar" style="width: 0%;"></div>
                </div>

                <div class="d-flex justify-content-between align-items-center small">
                    <span class="text-muted">Estimated Strength:</span>
                    <span id="pwdStrengthText" class="fw-bold text-secondary">None</span>
                </div>

                <hr class="border-secondary my-2">

                <!-- Rule Checklist -->
                <div class="row g-1 small" id="pwdCriteria">
                    <div class="col-6" id="ruleLen"><i class="bi bi-x-circle text-danger me-1"></i> &ge; 12 Characters</div>
                    <div class="col-6" id="ruleUpper"><i class="bi bi-x-circle text-danger me-1"></i> Uppercase Letter</div>
                    <div class="col-6" id="ruleLower"><i class="bi bi-x-circle text-danger me-1"></i> Lowercase Letter</div>
                    <div class="col-6" id="ruleNum"><i class="bi bi-x-circle text-danger me-1"></i> Number (0-9)</div>
                    <div class="col-6" id="ruleSym"><i class="bi bi-x-circle text-danger me-1"></i> Special Symbol</div>
                    <div class="col-6" id="ruleEntropy"><i class="bi bi-x-circle text-danger me-1"></i> No Repetitive Chars</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 8 Core Safety Pillars -->
<h3 class="fw-bold mb-4">Eight Pillars of Digital Protection</h3>

<div class="row g-4">

    <!-- Pillar 1: Password Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-info mb-3">
                <i class="bi bi-key-fill"></i>
            </div>
            <h5 class="fw-bold mb-2">1. Password Hygiene</h5>
            <p class="text-muted small">
                Use distinct passphrases for every single service. If an attacker compromises a gaming forum, they cannot reuse that password on your academic portal.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Never reuse passwords.</li>
                <li>Utilize a dedicated password manager.</li>
                <li>Aim for 16+ character passphrases.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 2: Multi-Factor Authentication -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-success mb-3">
                <i class="bi bi-phone-vibrate"></i>
            </div>
            <h5 class="fw-bold mb-2">2. Multi-Factor (MFA)</h5>
            <p class="text-muted small">
                MFA blocks 99.9% of automated credential stuffing attacks. Even if an attacker captures your password, they cannot proceed without your token.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Prefer Authenticator apps over SMS.</li>
                <li>Deploy FIDO2 hardware security keys.</li>
                <li>Beware of MFA prompt bombing spam.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 3: Email Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-warning mb-3">
                <i class="bi bi-envelope-check"></i>
            </div>
            <h5 class="fw-bold mb-2">3. Email Defenses</h5>
            <p class="text-muted small">
                Treat every unsolicited email requesting urgent financial or password action with critical skepticism.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Inspect sender domain syntax.</li>
                <li>Verify links by hovering before clicking.</li>
                <li>Contact senders via a known channel.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 4: Browser Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-danger mb-3">
                <i class="bi bi-globe"></i>
            </div>
            <h5 class="fw-bold mb-2">4. Browser Security</h5>
            <p class="text-muted small">
                Your browser is your primary gateway to the web. Configure strict cookie controls and minimize untrusted extensions.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Install reputable ad/script blockers.</li>
                <li>Audit extensions monthly.</li>
                <li>Clear session cookies regularly.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 5: Mobile Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-primary mb-3">
                <i class="bi bi-phone"></i>
            </div>
            <h5 class="fw-bold mb-2">5. Mobile Device Security</h5>
            <p class="text-muted small">
                Smartphones are frequent targets for smishing text messages and rogue app sideloading.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Download only from official app stores.</li>
                <li>Disable automatic Wi-Fi joining.</li>
                <li>Review permissions (camera, contacts).</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 6: Social Media Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-info mb-3">
                <i class="bi bi-people-fill"></i>
            </div>
            <h5 class="fw-bold mb-2">6. Social Media Hygiene</h5>
            <p class="text-muted small">
                Attackers use social profiles to craft customized spear phishing lures and answer security recovery questions.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Never post pet names, mother's maiden name, or birthplaces.</li>
                <li>Set profiles to friends-only privacy.</li>
                <li>Be wary of friend requests from duplicate profiles.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 7: Public Wi-Fi Safety -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-warning mb-3">
                <i class="bi bi-wifi-off"></i>
            </div>
            <h5 class="fw-bold mb-2">7. Public Wi-Fi Dangers</h5>
            <p class="text-muted small">
                Open public networks in cafes or airports can be intercepted by "Evil Twin" hotspots or rogue DNS sniffers.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Use a trusted VPN on untrusted networks.</li>
                <li>Never conduct banking over open hotspots.</li>
                <li>Turn off network sharing in OS settings.</li>
            </ul>
        </div>
    </div>

    <!-- Pillar 8: Software Updates -->
    <div class="col-md-6 col-lg-3">
        <div class="cyber-card p-4 h-100">
            <div class="workflow-icon text-success mb-3">
                <i class="bi bi-arrow-repeat"></i>
            </div>
            <h5 class="fw-bold mb-2">8. Patch Management</h5>
            <p class="text-muted small">
                Cybercriminals actively exploit known Common Vulnerabilities and Exposures (CVEs) in outdated browsers and operating systems.
            </p>
            <ul class="text-muted small ps-3 mb-0">
                <li>Enable automated operating system updates.</li>
                <li>Restart browser to apply zero-day patches.</li>
                <li>Uninstall obsolete plugins and software.</li>
            </ul>
        </div>
    </div>

</div>

<!-- Client-Side Password Evaluator Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const pwdInput = document.getElementById('pwdInput');
    const toggleBtn = document.getElementById('togglePwdVisibility');
    const toggleIcon = document.getElementById('togglePwdIcon');
    const bar = document.getElementById('pwdStrengthBar');
    const text = document.getElementById('pwdStrengthText');

    const ruleLen = document.getElementById('ruleLen');
    const ruleUpper = document.getElementById('ruleUpper');
    const ruleLower = document.getElementById('ruleLower');
    const ruleNum = document.getElementById('ruleNum');
    const ruleSym = document.getElementById('ruleSym');
    const ruleEntropy = document.getElementById('ruleEntropy');

    if (!pwdInput) return;

    toggleBtn.addEventListener('click', () => {
        if (pwdInput.type === 'password') {
            pwdInput.type = 'text';
            toggleIcon.className = 'bi bi-eye-slash';
        } else {
            pwdInput.type = 'password';
            toggleIcon.className = 'bi bi-eye';
        }
    });

    pwdInput.addEventListener('input', () => {
        const val = pwdInput.value;
        evaluatePassword(val);
    });

    function evaluatePassword(str) {
        if (!str) {
            bar.style.width = '0%';
            bar.className = 'progress-bar';
            text.textContent = 'None';
            text.className = 'fw-bold text-secondary';
            updateRules([false, false, false, false, false, false]);
            return;
        }

        const hasLen = str.length >= 12;
        const hasUpper = /[A-Z]/.test(str);
        const hasLower = /[a-z]/.test(str);
        const hasNum = /[0-9]/.test(str);
        const hasSym = /[^A-Za-z0-9]/.test(str);
        const hasEntropy = !/(.)\1{2,}/.test(str) && str.length >= 8;

        updateRules([hasLen, hasUpper, hasLower, hasNum, hasSym, hasEntropy]);

        let score = 0;
        if (str.length >= 8) score += 1;
        if (hasLen) score += 1;
        if (str.length >= 16) score += 1;
        if (hasUpper) score += 1;
        if (hasLower) score += 1;
        if (hasNum) score += 1;
        if (hasSym) score += 1;
        if (hasEntropy) score += 1;

        // Map score [0..8] to strength
        if (score <= 3) {
            bar.style.width = '25%';
            bar.className = 'progress-bar bg-danger';
            text.textContent = 'Weak';
            text.className = 'fw-bold text-danger';
        } else if (score <= 5) {
            bar.style.width = '50%';
            bar.className = 'progress-bar bg-warning';
            text.textContent = 'Fair';
            text.className = 'fw-bold text-warning';
        } else if (score <= 7) {
            bar.style.width = '75%';
            bar.className = 'progress-bar bg-info';
            text.textContent = 'Strong';
            text.className = 'fw-bold text-info';
        } else {
            bar.style.width = '100%';
            bar.className = 'progress-bar bg-success';
            text.textContent = 'Very Strong';
            text.className = 'fw-bold text-success';
        }
    }

    function updateRules(checks) {
        const rules = [ruleLen, ruleUpper, ruleLower, ruleNum, ruleSym, ruleEntropy];
        checks.forEach((passed, idx) => {
            const el = rules[idx];
            if (!el) return;
            const icon = el.querySelector('i');
            if (passed) {
                icon.className = 'bi bi-check-circle text-success me-1';
                el.classList.add('text-success');
                el.classList.remove('text-muted');
            } else {
                icon.className = 'bi bi-x-circle text-danger me-1';
                el.classList.remove('text-success');
                el.classList.add('text-muted');
            }
        });
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
