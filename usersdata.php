<html>
	<html lang="en" class="animated fadeIn">
		<title> Home page </title>
			<link rel="stylesheet" href="style.css" type="text/css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link href="animate.css" rel="stylesheet">
			<link rel="stylesheet" href="style1.css" type="text/css">
			
			</head>
	<header>

		<!-- this is the navigational bar at top -->
		<div class="logo">
			Kindergarten text is here idk
			<BR>
	 	</div>

		<div class="navigation">

			<ul>
				<li><a href="home.php" class="cool"><i class="fa fa-home"></i> Home </a> </li>
				<li class="active"><a href="aboutus.php" class="cool"> <i class="fa fa-address-card"></i> About Us </a>
				<li><a class="cool"> <i class="fa fa-book"></i>  Subjects </a> 

				<!-- Dropdown nav of contact us --> 	

					<div class="sub-nav-1">
						<ul>
							<li><a href="alphabet.php" class="cool"> Alphabet </a></li>	
							<li><a href="number.php" class="cool"> Numbers </a></li>
							<li><a href="sound.php" class="cool"> Sounds </a></li>	
							<li><a href="start.php" class="cool"> Mini Quiz </a></li>						
						</ul>
					</div>

				<li><a href="login.php" class="cool"> <i class="fa fa-user"></i> Login </a>
				<li><a href="search.php" class="cool"> <i class="fa fa-search"></i> Search </a>
				<li><?php if (isset($_SESSION['username'])) : ?>
        			<a>Hi <strong><?php echo $_SESSION['username']; ?></strong></a>
					

						<!-- Dropdown nav of login --> 		

					<div class="sub-nav-1">
						<ul>
	
					      <li> <a href="home.php?logout='1'" style="color: red;">Logout</a> </li>
   							 <?php endif ?>	</a>
						</ul>
					</div>
</header>
<body>
	<table>
			<?php
				$conn = mysqli_connect("localhost", "root", "","registration");
				if ($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				}

				$sql = "SELECT id, username, email FROM users";
				$result = $conn-> query($sql);

				if($result-> num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>". $row["id"]. "</td><cairo_matrix_transform_distance(matrix, dx, dy)>". $row["username"]."</td><td>". $row["email"]
						."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "0 result";
				}
				$conn-> close();



			?>

	</table>







	</body>
	</html>