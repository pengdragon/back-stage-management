<?php
    header("Content-type: text/html; charset=UTF-8");
    $coon = new mysqli('localhost','root','','db_student_admin',3306);
   $sql = 'SELECT * from  commodity';

   $coon->query("SET CHARACTER SET 'utf8'");//读库   
   $coon->query("SET NAMES 'utf8'");//写库 

     $row = $coon ->query($sql);
     $result =$row->fetch_all();

   $table=" <table border='1'class='table table-hover'>
   <thead>
     <tr>
        <td>id</td>
        <td>商品名称</td>
        <td>商品价格</td>
        <td>商品数量</td>
        <td>操作</td>
     </tr></thead>";
  //开始创建表格来接受数据
   for($i=0;$i<sizeof($result);$i++){//count和sizeof都是可以计算数组的长度的
       $table .="<tr class='tr'>";
   foreach($result[$i] as $val=>$attr){
       $table.= "<td>". $attr.'</td>';
}   
$table .="<td class='delete'>删除</td>";
   $table .= "</tr>";
}
$table .= "</table>";
echo("    <div class='return'>返回主页</div>
<div class='add'>添加商品</div>".$table);
?>