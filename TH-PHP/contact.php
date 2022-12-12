<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index123.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index123.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="rooms.php">Rooms</a>
						</li>
						<li>
							<a href="dives.php">Dive Site</a>
						</li>
						<li>
							<a href="foods.php">Food</a>
						</li>
						<li>
							<a href="news.php">News</a>
						</li>
						<li class="selected">
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							<form method="post" >
								<table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" value="" class="txtfield" name="txtName"></td>
										</tr> <tr>
											<td>Email:</td>
											<td><input type="text" value="" class="txtfield" name="txtEmail"></td>
										</tr> <tr>
											<td>Subject:</td>
											<td><input type="text" value="" class="txtfield" name="txtSubject"></td>
										</tr> 
										<tr>
											<td class="txtarea">Message:</td>
											<td><textarea name="txtMessage"></textarea></td>
										</tr> 
									</tbody>
								</table>
								<button type="submit" name="txtSubmit">submit</button>
							</form>
							<?php
							include('control.php');
							$get_data = new data();
							if(isset($_POST['txtSubmit']))
							{
								if(empty($_POST['txtEmail'])){
									echo "<script>alert('Ban chua nhap thong tin')</script>";
								}else{
									$insert = $get_data->insert_contact($_POST['txtName'],
																		$_POST['txtEmail'],
																		$_POST['txtSubject'],
																		$_POST['txtMessage']);
									if($insert){
										echo "<script>alert('them contact thanh cong')</script>";
									}else{
										echo "fail";
									}
								}

							}
							?>
							<h2>CD:202255</h2>
							<p>
								<span>class:</span>LTMT-3 k-12
							</p>
							<p>
								<span>Telephone Number:</span> 1-800-999-9999
							</p>
							<p>
								<span>Fax Number:</span> 1-800-111-1111
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index123.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="rooms.php">Rooms</a>
					</li>
					<li>
						<a href="dives.php">Dive Site</a>
					</li>
					<li>
						<a href="foods.php">Food</a>
					</li>
					<li>
						<a href="news.php">News</a>
					</li>
					<li class="active">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>