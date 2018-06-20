<?php
session_start();
require_once 'work_to_db/func_db.php';
if(!isset($_SESSION['goods']))
    $_SESSION['count_p'] = Array();
if(!isset($_SESSION['count_p']))
    $_SESSION['goods'] = Array();

?>