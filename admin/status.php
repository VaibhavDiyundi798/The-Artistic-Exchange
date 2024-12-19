<?php
$id=$_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db("bare");

$query="select * from register where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	if($row['status']=='N')
	{
		$query1="update register set status='Y' where id='$id'";
	}
	else
	{
		$query1="update register set status='N' where id='$id'";
	}

mysql_query($query1);
header("location:allregister.php");
}
?>