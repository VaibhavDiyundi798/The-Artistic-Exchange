<?php
session_start();
$id=$_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db("bare");
$query="select * from register where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
	<title>Update Registration</title>
	<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="black">
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					<h1 style="color:gold;">UPDATE PROFILE</h1>
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
			<form action="up_reg_code.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
			<table>
				<tr>
				<td>First Name<br></td>
				<td>:</td>
				<td>
				<input name="fname" type="text" value="<?php echo $row['firstname'];?>"/></td>
				</tr>
				<tr>
				<td>Last Name</td>
				<td>:</td>
				<td>
				<input name="lname" type="text" value="<?php echo $row['lastname'];?>"/></td>
				</tr>
				<tr>
				<td>Gender</td>
				<td>:</td>
				<td><input name="gender" type="radio" value="male" <?php if($row['gender']=='male'){?> checked <?php } ?>/>male
						<input name="gender" type="radio" value="female" <?php if($row['gender']=='female'){?> checked <?php } ?>/>female</td>
				</tr>
				<tr>
				<td>Date Of Birth</td>
				<td>:</td>
				<td><input name="dob" type="text" value="<?php echo $row['dateofbirth'];?>"/></td>
				</tr>
				<tr>
				<td>Mobile</td>
				<td>:</td>
				<td>
				<input name="mobile" type="text" value="<?php echo $row['mobile'];?>"/></td>
				</tr>	
				<tr>
				<td>E-mail: </td>
				<td>:</td>
				<td><input type="email" name="email" value="<?php echo $row['email'];?>"/></td>
				</tr>
				<tr>
				<td>Password: </td>
				<td>:</td>
				<td><input type="password" name="password" value="<?php echo $row['password'];?>"/></td>
				</tr>
				<tr>
				<td>Current Status</td>
				<td>:</td>
				<td><select  name ="currentstatus" value="<?php echo $row['currentstatus'];?>">
					<option selected="selected" value="[ Select Program ]">[ Select status ]</option>
					<option>Working</option>
					<option>Business</option>
					<option>Home Maker</option>
					<option>Studying</option>
					<option>Other</option></select></td>
				</tr>	
				<tr>
					<td>Address </td>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo $row['address'];?>"/></td>
				</tr>  
				<tr>
					<td>State</td>
					<td>:</td>
					<td><select name="state"><?php echo $row['state'];?>
						<option selected="selected" value="[ Select State ]">[ Select State ]</option>
						<option>Andaman and Nicobar (UT)</option>
						<option>Arunachal Pradesh</option>
						<option>Assam</option>
						<option>Bihar</option>
						<option>Chhattisgarh</option>
						<option>Goa</option>
						<option>Gujarat</option>
						<option>Haryana</option>
						<option>Himachal Pradesh</option>
						<option>Jammu &amp; Kashmir</option>
						<option>Jharkhand</option>
						<option>Karnataka</option>
						<option>Kerala</option>
						<option>Madhya Pradesh</option>
						<option>Maharashtra</option>
						<option>Manipur</option>
						<option>Meghalaya</option>
						<option>Mizoram</option>
						<option>Nagaland</option>
						<option>Orissa</option>
						<option>Punjab</option>
						<option>Rajasthan</option>
						<option>Sikkim</option>
						<option>Tamil Nadu</option>
						<option>Tripura</option>
						<option>Uttar Pradesh</option>
						<option>Uttarakhand</option>
						<option>West Bengal</option>
						<option>Delhi</option>
						<option>Andhra Pradesh</option>
						<option>Chandigarh (UT)</option>
						<option>Dadra and Nagar Haveli (UT)</option>
						<option>Daman and Diu (UT)</option>
						<option>Lakshadweep (UT)</option>
						<option>Pondicherry (UT)</option>
						<option>Telangana</option>
						<option>Others</option></select></td>
					</tr>
					<tr>
					<td>City</td>
					<td>:</td>
					<td><input type="text" name="city" value="<?php echo $row['city'];?>"/></td>
					</tr>	
					<tr>
					<td>Pin Code </td>
					<td>:</td>
					<td><input type="text" name="pincode" value="<?php echo $row['pincode'];?>"/></td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="update" style="font-size:20;height:40px;width:80px;"/></td>
					</tr>
					<?php
					}
					?>
					
			</table>
			</form>
			</div>
		</div>
	</body>
</html>