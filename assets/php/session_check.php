<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['last_activity']) || time() - $_SESSION['last_activity'] > 300) {
    header('Location: ../../html/login.php');
    exit();
} else {
    $_SESSION['last_activity'] = time();
}
?>