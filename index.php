<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

?>
<html>



<body>

    <h1>My home page</h1>
    <?php
//print_r($_SESSION); // виводимо змінні сесії ?>
    <br><a href="form.php">Вхід</a>
</body>

</html>