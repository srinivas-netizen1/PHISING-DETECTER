<?php
/**
 * PhishGuard - User-Friendly Error Page
 * Handles 400, 403, 404, 405, and 500 error states securely.
 */

define('PHISHGUARD_APP', true);

$code = isset($_GET['code']) ? (int)$_GET['code'] : 404;
if (!in_array($code, [400, 403, 404, 405, 500], true)) {
    $code = 404;
}

http_response_code($code);

$errorTitles = [
    400 => '400 - Bad Request',
    403 => '403 - Access Forbidden',
    404 => '404 - Resource Not Found',
    405 => '405 - Method Not Allowed',
    500 => '500 - Internal Server Error',
];

$errorDescriptions = [
    400 => 'The request sent to the server was invalid or malformed.',
    403 => 'You do not have permission to access the requested resource.',
    404 => 'The security module or page you were looking for does not exist.',
    405 => 'The HTTP request verb is not supported for this endpoint.',
    500 => 'A server error occurred. For security reasons, stack traces are withheld.',
];

$pageTitle = ($errorTitles[$code] ?? 'Error') . ' – PhishGuard';
require_once __DIR__ . '/includes/header.php';
?>

<div class="row justify-content-center py-5 text-center">
    <div class="col-md-7 col-lg-5">
        <div class="cyber-card p-5 border-danger border-opacity-50">
            <div class="display-1 fw-bold text-danger mb-3 font-monospace"><?= $code ?></div>
            <h3 class="fw-bold mb-2"><?= e($errorTitles[$code]) ?></h3>
            <p class="text-muted small mb-4">
                <?= e($errorDescriptions[$code]) ?>
            </p>
            <a href="<?= base_url('index.php') ?>" class="btn btn-cyber-primary">
                <i class="bi bi-house-door me-1"></i> Return to Homepage
            </a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
