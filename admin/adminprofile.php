<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php");
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	alert("Registered Successfully!!");
}

//mysql_connect('localhost','root','',"bare");
$con=mysqli_connect("127.0.0.1","root","","bare");
//mysqli_select_db("bare");
$query="select * from upload order by id";
$res=mysqli_query($con,$query);

$q1="select count(id) from register where viewstatus='N'";
//echo $q1;
//die();
$res1=mysqli_query($q1);
?>

<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body bgcolor="black">
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					</center>
			<div id="h2">
					<div id="menu">
						<ul>
							<li><a href="allregister.php">ALL REGISTRATIONS</a></li>
							<li><a href="allcontact.php">ALL CONTACTS</a></li>
							<li><a href="uploadproperty.php">UPLOAD PROPERTY</a></li>
							<li><a href="news.php">NEWS</a></li>
							<li><a href="changepassword.php">CHANGE PASSWORD</a></li>
							<li><a href="logout.php">LOG OUT</a></li>
						</ul>
					</div>
			</div>
			<div id="promain1">
				<?php
					$i=1;
					while($row=mysql_fetch_array($res,MYSQL_BOTH))
					{
					?>
				<div id="prop_show">
					<div id="prop_pic">
						<img src="upload/<?php echo $row['prop_photo'];?>" height="150" width="100%"/>
					</div>
					<div id="prop_detail">
						<p>Uploaded By: <?php echo $row['uploaded_by'];?></p>
						<p>Art Type: <?php echo $row['art_type'];?></p>
						<p>Price: <?php echo $row['price'];?></p>
						<p>Contact To: <?php echo $row['contact_person'];?></p>
						<p>Contact No.: <?php echo $row['contact_number'];?></p>
						<p><a href="delete_prop.php?id=<?php echo $row['0'];?>" style="color:red;">DELETE</a></p>	
					</div>
				</div>
				<?php
				$i++;
					}
				?>
			</div>
		</div>
	</body>
</html>