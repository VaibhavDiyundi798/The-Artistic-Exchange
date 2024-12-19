<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

//mysqli_connect('localhost','root','') or die("Database Not Connected");

 $con=mysqli_connect("127.0.0.1","root","","bare");
//mysqli_select_db("bare");
//$query="select * from register where email='$username'and password='$password'";

$query="select * from admin where email='$email'and password='$password'";
$res=mysqli_query($con,$query);
if (mysqli_num_rows($res) > 0) {
//mysql_select_db("bare");

//$res=mysql_query($query);

//if($row=mysql_fetch_array($res,MYSQL_BOTH))
//{
	$_SESSION['admin']=$email;
	header("Location:adminprofile.php");
}
else
{
	header("Location:index.php");
}
?>