<?php
    header("Content-type: text/html; charset=UTF-8");
    $title = $_POST['title'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $coon = new mysqli('localhost','root','','db_student_admin',3306);
   $insert_sql = "INSERT INTO commodity(title,price,count) VALUES('$title',' $price','$count')";
   $coon->query("SET CHARACTER SET 'utf8'");//读库   
   $coon->query("SET NAMES 'utf8'");//写库 
    $coon ->query( $insert_sql);
    $herf ="<script>
    location.href='../../app/page/delete.html';
    </script>";
    
    echo($herf);
?>