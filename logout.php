<?php
session_start();
unset($_SESSION['active']);
session_destroy();
header("Location: login.php");
?>