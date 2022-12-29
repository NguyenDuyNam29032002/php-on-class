<?php
include('control.php');
$get_data = new data();
if (isset($_POST['submit'])) {
	if (empty($_POST['email']))
		echo "<script>alert('Ban chua nhap du thong tin')</script>";
	else {
		$insert = $get_data->insert_contact(
			$_POST['name'],
			$_POST['email'],
			$_POST['subject'],
			$_POST['mess']
		);
		if ($insert)
			echo "<script>alert('Gui contact thanh cong')</script>";
		else
			echo "not finish";
	}
}
?>



<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
	<meta charset="UTF-8">
	<title>Contact - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<style>
		* {
			user-select: none;
		}
	</style>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
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
							<form method="POST">
								<table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" value="" class="txtfield" name="name"></td>
										</tr>
										<tr>
											<td>Email:</td>
											<td><input type="text" value="" class="txtfield" name="email"></td>
										</tr>
										<tr>
											<td>Subject:</td>
											<td><input type="text" value="" class="txtfield" name="subject"></td>
										</tr>
										<tr>
											<td class="txtarea">Message:</td>
											<td><textarea name="mess"></textarea></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" value="" class="btn" name="submit"></td>
										</tr>
									</tbody>
								</table>
							</form>
							<h2>Bhaccasyoniztas Beach Resort</h2>
							<p>
								<span>Address:</span> 123 Lorem Ipsum Cove, Sed Ut City, LI 12345
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
						<a href="index.php">Home</a>
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