<?php
/**
 * PhishGuard - User Registration
 */

define('PHISHGUARD_APP', true);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/functions.php';

// Guest check
require_guest('dashboard.php');

$pageTitle = 'Create Account – PhishGuard';
$errors = [];
$username = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verify_csrf_token()) {
        $errors[] = 'Security token expired. Please try submitting again.';
    } else {
        $username = trim($_POST['username'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirm  = $_POST['confirm_password'] ?? '';

        $pdo = get_db_connection();
        if (!$pdo) {
            $errors[] = 'Database is currently offline. Please ensure MySQL is running in XAMPP.';
        } else {
            $result = register_user($pdo, $username, $email, $password, $confirm);
            if ($result['success']) {
                // Automatically log user in
                login_user([
                    'id'       => $result['user_id'],
                    'username' => $username,
                    'email'    => $email,
                ]);
                set_flash('success', 'Registration successful! Welcome to PhishGuard.');
                header('Location: ' . base_url('dashboard.php'));
                exit;
            } else {
                $errors = $result['errors'];
            }
        }
    }
}

$extraScripts = ['password-strength.js'];
require_once __DIR__ . '/includes/header.php';
?>

<div class="row justify-content-center py-4">
    <div class="col-md-7 col-lg-5">
        <div class="cyber-card p-4 p-md-5 shadow-lg border-info border-opacity-25">
            <div class="text-center mb-4">
                <i class="bi bi-person-plus-fill text-info display-4 mb-2"></i>
                <h2 class="fw-bold">Create Account</h2>
                <p class="text-muted small">Register to track URL analysis history and quiz ranking</p>
            </div>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger small py-2">
                    <ul class="mb-0 ps-3">
                        <?php foreach ($errors as $err): ?>
                            <li><?= e($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?= base_url('register.php') ?>" novalidate>
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="regUsername" class="form-label small fw-bold">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="regUsername" name="username" value="<?= e($username) ?>" placeholder="e.g. cyber_user" required autocomplete="username">
                    </div>
                    <div class="form-text text-muted small">3-30 characters (letters, numbers, underscores).</div>
                </div>

                <div class="mb-3">
                    <label for="regEmail" class="form-label small fw-bold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="regEmail" name="email" value="<?= e($email) ?>" placeholder="user@example.com" required autocomplete="email">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="regPassword" class="form-label small fw-bold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="regPassword" name="password" placeholder="At least 8 characters with letters & numbers" required autocomplete="new-password">
                    </div>
                    <!-- Real-time Password Strength Component -->
                    <div id="passwordStrengthBox" class="password-strength-box mt-2" aria-live="polite">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="small fw-bold text-muted" id="pwdStrengthLabel">Password Strength</span>
                            <span class="small fw-bold text-muted" id="pwdStrengthStatus">Enter a password</span>
                        </div>
                        <div class="password-strength-meter" role="progressbar" id="pwdProgressBar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Password strength" aria-valuetext="Enter a password">
                            <div class="progress-bar" id="pwdProgressFill" style="width: 0%;"></div>
                        </div>
                        <div class="small text-muted mt-1" id="pwdStrengthGuidance" style="font-size: 0.8rem; line-height: 1.35;">
                            Strengthen your password with at least 8 characters, combining uppercase, lowercase, numbers, and symbols.
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="regConfirm" class="form-label small fw-bold">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" id="regConfirm" name="confirm_password" placeholder="Re-enter password" required autocomplete="new-password">
                    </div>
                    <!-- Real-time Password Confirmation Feedback -->
                    <div id="pwdMatchStatus" class="password-match-feedback mt-1" role="status" aria-live="polite"></div>
                </div>

                <button type="submit" class="btn btn-cyber-primary w-100 py-2 fw-bold">
                    <i class="bi bi-check2-circle me-1"></i> Register Account
                </button>
            </form>

            <div class="text-center mt-4 pt-3 border-top border-secondary small text-muted">
                Already have an account? 
                <a href="<?= base_url('login.php') ?>" class="text-info fw-bold">Login here</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
