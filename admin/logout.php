<?php
session_start();

unset($_SESSION['logged-in']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);

session_destroy();
header('location: login.php')

?>
