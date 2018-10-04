<?php
session_start();
if (password_verify($_POST['password'], '$2y$10$QhS8hcs8frP7to.1tIw1OuQn2I2uJJNc.gcyVs2G1jQYn7vMqVNzq') && password_verify($_POST['username'], '$2y$10$rDQO8fN2A5c02pSyRg0.ouwGKfFE4aJslDrsLG4f0K88v8GWH3gDG')) {
    $_SESSION['admin'] = 'loggedIn';
    header('Location: dashboard.php');
}
else {
    header('Location: login.php?error=01');
}
