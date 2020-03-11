<?php
$link = @mysqli_connect('localhost','root','08042') or die('链接数据库失败');
$result=mysqli_select_db($link,'Persons')or die('选择数据库失败');
$result=mysqli_set_charset($link, 'utf8');

$sql="INSERT INTO Persons(YourName,YourEmail,Saying)VALUES
('$_POST[YourName]','$_POST[YourEmail]','$_POST[Saying]')";


$result=mysqli_query($link,$sql);

if($result&&mysqli_affected_rows($link)>0){
    echo'<script>alert("添加数据成功")</script>';
}else{
    echo'<script>alert("添加数据失败")</script>';
}
mysqli_close($link);
?>