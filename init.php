<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// CSRF token helpers
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
function csrf_token() { return $_SESSION['csrf'] ?? ''; }
function check_csrf() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $token = $_POST['csrf'] ?? '';
        if (!hash_equals($_SESSION['csrf'] ?? '', $token)) {
            http_response_code(400);
            die('Invalid CSRF token');
        }
    }
}

// HTML escape helper
function h($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
