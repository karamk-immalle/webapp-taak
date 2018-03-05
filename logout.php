<?php
session_start();
unset($_SESSION['logged_in']);
header("location: http://localhost/webapp/page1.php");
?>