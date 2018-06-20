<?
session_start();
unset($_SESSION['login']);
unset($_SESSION['status']);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>