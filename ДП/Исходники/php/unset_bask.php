<?
session_start();
unset($_SESSION['goods']);
unset($_SESSION['count_p']);
unset($_SESSION['price']);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>