<?php
echo "<center><font face='verdana'><br><img src='css/25.GIF'></img><br><br><br>";
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();

echo "Logged out successfully ! ";
echo "<br>";
echo "<h6>    This page will redirect to login page automatically...<br>";
echo "If it does not, <a href='index.php'>click here</a> to proceed...";
header( "refresh:3;url=index.php" );

?>