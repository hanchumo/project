<?php 

session_start();

if($_SESSION['admin_email']==true){
	}
	else{
		header('location: login.php');
	}

include ("includes/db.php");
?>
<html>
<head>
	<title>HANGYM| Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
    <link href="images/favicon.png" rel="icon" type="image/favicon.png-icon" />
</head>
<body>
	<!-- Main Container Start -->
	<div class="wrapper">
		
		<!-- Header Start -->
		<div class="header">
			<a href="index.php"><img src="images/header0.jpg"width="800"height="120"></a>
			<!-- <img src="images/add2card.jpg" style="float: right"> -->
		</div>
		<!-- Header End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div class="right" style="background-image: url(images/abs-workout-tire.jpg)">
					<a href="index.php?view_users">View Users</a>
					<a href="index.php?view_trainers">View Trainers</a>
					<a href="index.php?add_trainers">Add Trainers</a>
					<a href="index.php?view_exercises">View Exercises</a>
					<a href="index.php?add_exercises">Add Exercises</a>
					<a href="logout.php"></a>

			</div>
            <div class="content_wrapper">
                <a href="login.php">Admin logout</a>
            </div>
        </div>
			<div class="left" style="background-image: url(images/bg.jpg)">
				<!-- Product Display Box Start -->
					<div id="products_box">
						<?php
							if (isset($_GET['view_users'])) {
								include("view_users.php");
							}
							if (isset($_GET['view_trainers'])) {
								include("view_trainers.php");
							} 
							if (isset($_GET['add_trainers'])) {
								include("add_trainers.php");
							}
							if (isset($_GET['view_exercises'])) {
								include("view_exercises.php");
							}
							if (isset($_GET['add_exercises'])) {
								include("add_exercises.php");
							}
							if (isset($_GET['edit_tran'])) {
								include("edit_tran.php");
							}
							if (isset($_GET['edit_exercise'])) {
								include("edit_exercises.php");
							}
							if (isset($_GET['delete_exercise'])) {
								include("delete_exercise.php");
							}
							if (isset($_GET['delete_tran'])) {
								include("delete_trainer.php");
							}
							if (isset($_GET['delete_user'])) {
								include("delete_user.php");
							}

						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy;Hannington chumo</a></h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>