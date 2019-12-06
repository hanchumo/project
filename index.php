<?php 

session_start();

if($_SESSION['user_email']==true){
	}
	else{
		header('location: login.php');
	}

include ("includes/db.php");
include ("functions/functions.php");
?>

<html>
<head>
	<title>HANGYM | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
    <link href="images/favicon.png" rel="icon" type="images/favicon.png-icon" />
</head>
<body style="background-image: url(images/admin.jpg)">
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
            <a href="index.php"><img src="images/favicon.png"width="200"height="100"></a><a href="index.php">
                <img src="images/fitness-slogans.jpg"width="600"height="100"></a>
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="my_account.php">My Account</a></li>
				<li><a href="contact.php">Contact Us</a></li>
                <li><a href="admin/login.php">Admin login</a></li>
			</ul>

			<div id="login-btn-signup">
					<li><a href="logout.php">Logout</a></li>
			</div>
		</div>
		<!-- NavBar End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Days</div>
				<ul id="days">
					<?php  
						getDays();
					?>
				</ul>

				<div id="sidebar_title">Exercises</div>
				<ul id="days">
					<?php 
						getExercise();
					?>
				</ul>
			</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: blue; text-align:center;"><center>Commit to be fit</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/photo4.jpg)">
						<?php
							get_All_Exercises();
							get_Day_Exercises();
							get_Exer_Exercises();
						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:black; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif"></a>&copy hannington</h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>