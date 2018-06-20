<?
session_start();
require_once '../work_to_db/func_db.php';
$id = $_GET['id'];
$db = DataBase::getDB();
$P = $db->selectCell("SELECT price FROM goods WHERE id = {?}",[$id]);
$_SESSION['price']-=($P*$_SESSION['count_p'][$id]);
unset($_SESSION['goods'][$id]);
unset($_SESSION['count_p'][$id]);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>