<?php
session_start();

// Remove os cookies
if (isset($_COOKIE['user_login'])) {
    setcookie('user_login', '', time() - 3600, '/');
}
if (isset($_COOKIE['user_time'])) {
    setcookie('user_time', '', time() - 3600, '/');
}

session_destroy();
header('Location: index.html');
exit();
?>