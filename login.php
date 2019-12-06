<?php 

session_start();
include ("includes/db.php");
include ("functions/functions.php");

?>
<html>
<head>
	<title>HANGYM| Login</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
    <link href="images/favicon.png" rel="icon" type="images/favicon.png-icon" />
    </head>
<body style="background-image: url(images/admin9.jpg)">
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
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="contact.php">Contact Us</a></li>
            </ul>
                <div id="login-btn-signup">
                    <li><a href="Admin/login.php">Admin login</li>
                </div>




			<div id="login-btn-signup">
					<!-- <li><a href="login.php">Login</a></li> -->
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
						<h1 style="color: #1767d5; text-align:center;"><center>Commit to be fit</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/back1.jpg)">
						<div id="frm">
								<h2 style="color:darkgrey; text-align: center;">Login</h2>
								<form action="login.php" method="post">
								    <label for="fname">Username</label>
								    <input type="email" id="fname" name="user_email" placeholder="Your name..">
								    <label for="lname">Password</label>
								    <input type="password" id="lname" name="user_pass" placeholder="Your last name..">
								    <input type="submit" value="Submit" name="user_login">
								</form>
						</div>
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

<?php 
	//Login Script Start
  if (isset($_POST['user_login'])){
    $user_email= ($_POST['user_email']);
    $user_password= ($_POST['user_pass']);
    $select_user="SELECT * FROM users WHERE user_email='$user_email' AND user_pass='$user_password'";
    $run_user=mysqli_query($con, $select_user);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count==1) {
      $_SESSION['user_email']=$user_email; //create session variable
      header('location: index.php');
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End
?>