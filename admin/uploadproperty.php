<?php
session_start();
?>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="outer">
					<img src="../gallery/bare.png" height="200px" width="30%"/>
					<center style="margin-top:-150px;margin-left:300px;"><h1 style="color:gold;">WELCOME TO ADMIN PANNEL</h1>
					<h1 style="color:gold;"><?php echo $_SESSION['admin'];?></h1>
					<h1 style="color:gold;">FILL THE FORM HERE</h1>
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
			<div id="form">
				<form action="up_prop_code.php" method="post" enctype="multipart/form-data">
				<table style="color:white;font-size:22;" align="center">
					
						<tr>
							<th width="100"></th>
							<th width="10"></th>
							<th width="200"></th>
						</tr>
						<tr>
							<td>Uploaded By</td>
							<td>:</td>
							<td><input type="radio" name="uploadedby" value="user"/>USER
								<input type="radio" name="uploadedby" value="admin"/>ADMIN</td>
						</tr>
						<tr>
							<td>Art Type</td>
							<td>:</td>
							<td><select name="art_type">
									<option></option>
									<option>Animation Art</option>
									<option>Architecture Art</option>
									<option>Art Brut</option>
									<option>Calligraphy</option>
									<option>Collage</option>
									<option>Conceptual Art</option>
									<option>Drawing</option>
									<option>Folk Art</option>
									<option>Graffiti Art</option>
									<option>Paintings</option>
							</select></td>
						</tr>
						<tr>
							<td>Type</td>
							<td>:</td>
							<td><select name="type">
									<option></option>
									<option>Showcase</option>
									<option>On Sale</option>
							</select></td>
						</tr>
						<tr>
							<td>Price</td>
							<td>:</td>
							<td><input type="text" name="price"/></td>
						</tr>
						<tr>
							<td>Upload Photo</td>
							<td>:</td>
							<td><input type="file" name="file"/></td>
						</tr>
						<tr>
							<td>Contact Person</td>
							<td>:</td>
							<td><input type="text" name="contact_person"/></td>
						</tr>
						<tr>
							<td>Contact Number</td>
							<td>:</td>
							<td><input type="number" name="number"/></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td>:</td>
							<td><input type="email" name="email"/></td>
						</tr><tr><td></td></tr>
						<tr><td colspan="3" align="center"><input type="submit" value="UPLOAD"style="font-size:20;box-shadow:15px 15px 15px 15px black inset;color:white;padding:2px;height:30px;"/></td></tr>
				</table>
				</form>
			</div>
		</div>
	</body>
</html>