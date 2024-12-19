<?php
$id=$_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db("bare");

$query="delete from upload_property where id='$id'";
mysql_query($query);
header("Location:adminprofile.php");
?>
