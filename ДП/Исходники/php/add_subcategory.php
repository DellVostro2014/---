<?php

 require_once '../work_to_db/func_db.php';
 $db = DataBase::getDB();

 $category = [$_POST['category']];
 $sub = $_POST['subcategory'];
 
 
 $Q = "SELECT `id` FROM main_categorys WHERE categorys = {?}"; 
 $id = $db->selectCell($Q,$category);
 $arr = [$sub,$id];

 $Q = "INSERT INTO categorys(category,main_category) VALUES({?},{?})";
 $db->query($Q,$arr);
 header("Location: ".$_SERVER['HTTP_REFERER']);
?>