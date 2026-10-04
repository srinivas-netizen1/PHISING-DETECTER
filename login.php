<?php
/**
 * PhishGuard - User Login
 */

define('PHISHGUARD_APP', true);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/functions.php';

// Guest check
require_guest('dashboard.php');

$pageTitle = 'Login – PhishGuard';
$error = '';
$identifier = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verify_csrf_token()) {
        $error = 'Security token expired. Please try submitting again.';
    } else {
        $identifier = trim($_POST['identifier'] ?? '');
        $password   = $_POST['password'] ?? '';

        $pdo = get_db_connection();
        if (!$pdo) {
            $error = 'Database is currently offline. Please ensure MySQL is running in XAMPP.';
        } else {
            $authResult = authenticate_user($pdo, $identifier, $password);
            if ($authResult['success'] && $authResult['user']) {
                login_user($authResult['user']);
                set_flash('success', 'Logged in successfully!');
                header('Location: ' . base_url('dashboard.php'));
                exit;
            } else {
                // Generic error to prevent enumeration
                $error = 'Invalid username or password.';
            }
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="row justify-content-center py-4">
    <div class="col-md-6 col-lg-4">
        <div class="cyber-card p-4 p-md-5 shadow-lg border-info border-opacity-25">
            <div class="text-center mb-4">
                <i class="bi bi-shield-lock text-info display-4 mb-2"></i>
                <h2 class="fw-bold">Sign In</h2>
                <p class="text-muted small">Access your personal security dashboard</p>
            </div>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger small py-2" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-1"></i> <?= e($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?= base_url('login.php') ?>">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="loginIdentifier" class="form-label small fw-bold">Username or Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="loginIdentifier" name="identifier" value="<?= e($identifier) ?>" placeholder="username or email@example.com" required autocomplete="username">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="loginPassword" class="form-label small fw-bold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary text-info"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required autocomplete="current-password">
                    </div>
                </div>

                <button type="submit" class="btn btn-cyber-primary w-100 py-2 fw-bold">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
                </button>
            </form>

            <div class="text-center mt-4 pt-3 border-top border-secondary small text-muted">
                Need an account? 
                <a href="<?= base_url('register.php') ?>" class="text-info fw-bold">Register here</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
