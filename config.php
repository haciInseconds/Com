<?php
// ==== Database config ====
// Update these for your local MySQL (XAMPP defaults shown)
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'simple_shop');
define('DB_USER', 'root');
define('DB_PASS', '');

// App base URL (optional; for redirects/links). Adjust if needed.
define('APP_BASE', '/'); // e.g. '/simple_shop/public/' if deployed in a subfolder

// Strong session settings
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
session_name('SIMPSHOPSESS');
?>
