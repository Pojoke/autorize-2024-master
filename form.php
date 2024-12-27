<form action="login.php" method="POST">
    Login: <input type="text" name="login" required>
    Password: <input type="password" name="passwd" required>
    <input type="submit" name="go" value="Go">
</form>

<?php

// session_start();
if (isset($_SESSION['authorized']) && $_SESSION['authorized'] == 1) {
    header("Location: secret_info.php");
    exit();
}

if (isset($_SESSION['err'])) {
    
    unset($_SESSION['err']);
    echo "<p >Невірний логін або пароль</p>";
}
?>


