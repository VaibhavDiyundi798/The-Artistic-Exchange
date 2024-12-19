<?php
session_start();
$a=$_SESSION['admin'];

//mysql_connect('localhost','root','');
$con=mysqli_connect("127.0.0.1","root","","bare");
mysqli_select_db("bare");

$query="select * from admin where email='$a'";

$res=mysqli_query($query);
if($row=mysqli_fetch_array($res,MYSQLI_BOTH))
{
?>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		<script>
		function check(){
			var a=document.getElementById("pass").value;
			var b=document.getElementById("opass").value;
			var s1=document.getElementById("sp1");
			if(a!=b)
			{
				s1.innerHTML="Please Enter correct Password";
				
			}
			
		}
		function check2()
		{
			var c=document.getElementById("npass").value;
			var d=document.getElementById("cpass").value;
			var s2=document.getElementById("sp2");
			if(c!=d)
			{
				s2.innerHTML="Chech the password Re-Entered";
			}
			else {
				s2.innerHTML="";
			}
			
		}
		</script>
	</head>
	<body bgcolor="black">
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					<h1 style="color:gold;">CHANGE PASSWORD HERE</h1> 
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
			<div id="main">
				<form action="change.php" method="post">
			<center>
				<input type="hidden" id="pass" value="<?php echo $a;?>"/><br/>
				<input type="password" id="opass" onblur="check()" placeholder="Enter Your Old Password"/><span id="sp1"></span><br/>
				<input type="password" id="npass" placeholder="Enter Your New Password"/><br/>
				<input type="password" id="cpass" onblur="check2()" name="cpass" placeholder="Confirm Password"/><span id="sp2"></span><br/>
				<input type="submit" style="font-weight:bold;font-size:22;" value="Change Password"/>
				<?php
				}
				?>
			</center>
			</form>

			</div>

		</div>
	</body>
</html>