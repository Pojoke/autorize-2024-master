<?php
include "db.php";

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];

    // Перевірка логіна та пароля
    if (isset($login_pass[$login]) && password_verify($passwd, $login_pass[$login])) {
        $_SESSION['authorized'] = 1;
        header("Location: secret_info.php");
        exit();
    } else {
        $_SESSION['err'] = 1;
        unset($_SESSION['authorized']);
        header("Location: index.php");
        exit();
    }
}
