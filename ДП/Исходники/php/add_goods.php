<?php 
     session_start();
	require_once '../work_to_db/func_db.php';
	$db = DataBase::getDB();

     $subject = htmlspecialchars( trim($_POST['subject']));
     $description =  htmlspecialchars(trim($_POST['description']));
	$price = htmlspecialchars(trim($_POST['price']));

	$main_category = htmlspecialchars(trim($_POST['main_category']));
     $category = htmlspecialchars(trim($_POST['sub_category']));
	$keywords = htmlspecialchars(trim($_POST['keywords']));
	$directory = '../images/goods_foto/';
	$fileextension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
	$filename = 'img'.date('U').'.'. $fileextension;
	$uploadfile = $directory . $filename;//готовая переменная для загрузки файла

	if (!is_dir($directory)) {
		mkdir($directory, 0777, true);
	}
	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
	//echo "Subject:".$subject."<br>Desc:".$description."<br>Category:".$category."<br>KeyWord:".$keywords."<br>Photo:".$uploadfile;

	$Q = "SELECT id FROM main_categorys WHERE categorys = {?}";
	$main_category = $db->selectCell($Q,[$main_category]);

	$Q = "SELECT id FROM categorys WHERE category = {?}";
	$category = $db->selectCell($Q,[$category]);

     $param = array($subject,$description,$price,$main_category,$category,$keywords,$uploadfile);
	$Q = "INSERT INTO goods(subject,description,price,main_category,category,key_words,img) VALUES ({?},{?},{?},{?},{?},{?},{?})";
	$db->query($Q,$param);
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>