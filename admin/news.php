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
$query="select * from news order by id";
$res=mysqli_query($query);

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
					<h1 style="color:gold;">NEWS BOARD</h1>
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
				<div id="ques">
					<form action="news_code.php" method="post">
						ADD NEWS : <textarea name="news" style="background:black;color:white;height:150px;" placeholder="Post News, Notices & Events Here.."></textarea>
						<input type="submit" value="ADD" style="height:50px;width:120px;font-size:20;background:black;border-radius:20px 5px 20px 5px;color:white;"/>
					</form>
				</div>
				<div id="ques1">
				<table border="1" style="height:40px;margin-top:20px;color:white;">
					<tr>
						<th>S.NO.</th>
						<th>NEWS</th>
					</tr>
					<?php
					$i=1;
					while($row=mysql_fetch_array($res,MYSQL_BOTH))
					{
					?>
					<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['news'];?></td>
					</tr>
					<?php
					$i++;
					}
					?>
				</table>
				</div>				
			</div>
		</div>
	</body>
</html>