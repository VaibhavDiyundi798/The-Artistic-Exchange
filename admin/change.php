<?php
session_start();
$a=$_SESSION['admin'];
$pass=$_POST['cpass'];

			mysql_connect('localhost','root','');
			mysql_select_db("bare");

			$query="update admin set password='$pass' where email='$a'";
			mysql_query($query);
		
			header("Location:logout.php");
		
	
?>