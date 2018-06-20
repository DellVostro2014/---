<?
require_once '/work_to_db/func_db.php';
	$db = DataBase::getDB();
	$Q = "SELECT * FROM main_categorys ORDER BY categorys";
	$main_res = $db->select($Q);

for($i=0;$i<count($main_res);$i++){
//вывод категорий
   echo'<li class="parent"><a href="goods.php?main_id='.$main_res[$i]['id'].'">'.$main_res[$i]['categorys'].'</a>';
   		$id = [$main_res[$i]['id']];
   		$sub_res = $db->select($Q = "SELECT * FROM categorys WHERE main_category ={?}  ",$id);
   			//Подкатегорий
   	  if(count($sub_res)>0){
   		echo '<ul>';
   		    for($j=0;$j<count($sub_res);$j++){
                echo'<li><a href="goods.php?sub_id='.$sub_res[$j]['id'].'">'.$sub_res[$j]['category'].'</a></li>';
               }
        echo '</ul>';    
       }   
   echo'</li>';
   } 
?>