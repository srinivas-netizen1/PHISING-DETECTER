<?php
/**
 * PhishGuard - Logout Handler (Protected POST Operation)
 */

define('PHISHGUARD_APP', true);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/functions.php';

// Reject GET and any non-POST methods
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo "Method Not Allowed. Logout must be executed via POST.";
    exit;
}

// Reject invalid or missing CSRF token with HTTP 403
if (!verify_csrf_token()) {
    http_response_code(403);
    echo "Forbidden: Invalid or missing CSRF token.";
    exit;
}

// Safely terminate user session
logout_user();

// Start clean session for flash notification
ensure_session_active();
set_flash('info', 'You have been safely logged out. See you next time!');

header('Location: ' . base_url('login.php'));
exit;
