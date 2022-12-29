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
							<a href="admin_contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							<?php
							include('admin_control.php');
							$get_data = new data();
							$select = $get_data->select_room();
							?>
							<table border="1" width="100%">
                                <button><a href="../admin/add_room.php">add</a></button>
								<tr>
									<td>ID_room</td>
									<td>Name</td>
									<td>picture</td>
									<td>price</td>
									<td>description</td>
									<td>Option</td>
								</tr>
								<?php
								foreach ($select as $se_room) {
								?>
									<tr>
										<td><?php echo $se_room['id_room'] ?></td>
										<td><?php echo $se_room['name'] ?></td>
										<!-- <td><?php echo $se_room['picture'] ?></td> -->
                                        <td><img src="images/<?php echo $se_room['picture']?>" "width="70%" "height="70""></td>
										<td><?php echo $se_room['price'] ?></td>
										<td><?php echo $se_room['description'] ?></td>
                                        <td> <a href="update_room.php?del=<?php echo $se_room['id_room'] ?>">edit</a>
										<a href="delete_room.php?del=<?php echo $se_room['id_room'] ?>">Delete</a></td>
									</tr>
								<?php
								}
								?>
							</table>
						</div>
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