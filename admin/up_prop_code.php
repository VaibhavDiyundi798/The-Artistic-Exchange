<?php
$uploadedby=$_POST['uploadedby'];
$art_type=$_POST['art_type'];
$type=$_POST['type'];
$price=$_POST['price'];
$file=$_FILES['file']['name'];
$contact_person=$_POST['contact_person'];
$number=$_POST['number'];
$email=$_POST['email'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";

$con=mysqli_connect("127.0.0.1","root","","bare");
//mysql_connect('localhost','root','');
mysqli_select_db("bare");

$query="insert into upload(uploaded_by,art_type,type,price,prop_photo,contact_person,contact_number,email,date) values('$uploadedby','$art_type','$type','$price','$file','$contact_person','$number','$email',curdate())";

mysqli_query($query);
move_uploaded_file($tmp_name,$location.$file);
header("Location:adminprofile.php");
?>