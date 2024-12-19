<?php
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$currentstatus=$_POST['currentstatus'];
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];

mysql_connect('localhost','root','');
mysql_select_db("bare");
$query="update register set firstname='$fname',lastname='$lname',gender='$gender',dateofbirth='$dob',mobile='$mobile',email='$email',password='$password',currentstatus='$currentstatus',address='$address',state='$state',city='$city',pincode='$pincode' where id='$id'";
//echo $query;
mysql_query($query);
header("location:allregister.php");
?>