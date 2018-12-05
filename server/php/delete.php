<?php
   $title = file_get_contents('php://input');
   header("Content-type: text/html; charset=UTF-8");
   $coon = new mysqli('localhost','root','','db_student_admin',3306);
   $coon->query("SET CHARACTER SET 'utf8'");//读库   
   $coon->query("SET NAMES 'utf8'");//写库 
   $title =json_decode($title);
   if($title){
    $title = $title->title;
    $sql = "DELETE FROM commodity where title='$title'";
    $coon ->query($sql);
    echo($title);
   }
?>
 
 
  
  