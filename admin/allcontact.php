<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php");
}

//mysql_connect('localhost','root','');
$con=mysqli_connect("127.0.0.1","root","","bare");
mysqli_select_db("bare");

$query="select * from message_query order by id";
$res=mysqli_query($query);
?>
<html>
	<head>
		<title>All Contacts</title>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body bgcolor="black">
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					<h1 style="color:gold;">ALL ACTIVE CONTACTS</h1>
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
		<center>
		<table border="1" align="center">
			<tr bgcolor="silver" style="font-size:20;">
				<th>S No.</th>
				<th>NAME</th>
				<th>E-MAIL</th>
				<th>CONTACT</th>
				<th>MESSAGE</th>
				<th>DELETE</th>
				<th>UPDATE</th>
			</tr>
			<?php
			$i=1;
			while($row=mysqli_fetch_array($res,MYSQLI_BOTH))	
			{
			?>
			<tr bgcolor="#e5e5e5">
				<td><?php echo $i;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['number'];?></td>
				<td><?php echo $row['message'];?></td>
				<td><a href="contactdelete.php?id=<?php echo $row['0'];?>"><img src="deleteicon.png"/></a></td>
				<td><a href="contactupdate.php?id=<?php echo $row['0'];?>"><img src="updateicon.png"/></a></td>
				
			</tr>
			<?php
			$i++;
			}
			?>
		</table>
	</body>
</html>