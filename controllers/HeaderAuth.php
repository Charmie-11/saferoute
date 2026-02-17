<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {

    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();

    header("Location: /index.php");
    exit();
}
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();  
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: /httpdocs/index.php");
    exit();
}

$page = basename($_SERVER['PHP_SELF']);

$isLoggedIn = isset($_SESSION['user_id']); 
$isUser = (isset($_SESSION['role']) && $_SESSION['role'] === 'user');
$isAdmin = (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
?>