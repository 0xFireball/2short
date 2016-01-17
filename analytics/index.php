<?php
include('../config.php');
session_start();
?>
<form action="auth.php" method="POST">
    Enter your password: <input type="password" name="password" />
    <input type="submit"/>
</form>