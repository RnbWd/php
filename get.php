<?php 
session_start();

$_SESSION = $_GET;

header('Location: fibonacci.php');
?>