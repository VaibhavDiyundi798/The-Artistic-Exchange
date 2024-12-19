<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php");
}
$con=mysqli_connect("127.0.0.1","root","","bare");
//mysql_connect('localhost','root','');
mysqli_select_db("bare");

$query="select * from register order by id";
$res=mysqli_query($query);
?>
<html>
	<head>
		<title>REGISTRATIONS</title>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body bgcolor="black">
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					<h1 style="color:gold;">ALL ACTIVE REGISTRATIONS</h1>
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
		
			<table border="0.5" align="center" style="font-size:18;text-align:center;">
				<tr bgcolor="silver">
					<th>S No.</th>
					<th>STATUS</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>GENDER</th>
					<th>DATE OF BIRTH</th>
					<th>MOBILE</th>
					<th>E-MAIL</th>
					<th>PASSWORD</th>
					<th>CURRENT STATUS</th>
					<th>ADDRESS</th>
					<th>STATE</th>
					<th>CITY</th>
					<th>PINCODE</th>
					<th>DELETE</th>
					<th>Update</th>
				</tr>
				<?php
				$i=1;
				while($row=mysqli_fetch_array($res,MYSQL_BOTH))
				{
				?>
				<tr bgcolor="#e4e4e4" style="font-size:18;">
					<td><?php echo $i;?></td>
					<td><a href="status.php?id=<?php echo $row['0'];?>"><?php echo $row['status'];?>	</a></td>
					<td><?php echo $row['firstname'];?></td>
					<td><?php echo $row['lastname'];?></td>
					<td><?php echo $row['gender'];?></td>
					<td><?php echo $row['dateofbirth'];?></td>
					<td><?php echo $row['mobile'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><?php echo $row['currentstatus'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['state'];?></td>
					<td><?php echo $row['city'];?></td>
					<td><?php echo $row['pincode'];?></td>
					<td><a href="registerdelete.php?id=<?php echo $row['0'];?>"><img src=	"deleteicon.png"/></a></td>
					<td><a href="registerupdate.php?id=<?php echo $row['0'];?>"><img src=	"updateicon.png"/></a></td>
				</tr>
				<?php
				$i++;
				}
				?>
			</table>
		</div>
	</body>
</html>