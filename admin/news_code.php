<?php
$news=$_POST['news'];
$con=mysqli_connect("127.0.0.1","root","","bare");
//mysql_connect('localhost','root','');
mysqli_select_db("bare");
$query="insert into news(news,date) values('$news',curdate())";
//echo $query;
mysqli_query($query);
header("Location:news.php");
?>