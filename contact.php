<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" type="image/favicon.png-icon" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #1767d5;
        }

        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: blue;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>
</head>
<body>
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
            <li><a href="login.php">Login</a></li>
        </ul>
        <div id="login-btn-signup">
            <li><a href="Admin/login.php">Admin login</li>
        </div>




        <div id="login-btn-signup">
            <!-- <li><a href="login.php">Login</a></li> -->
        </div>
    </div>
    <!-- NavBar End -->
<h2>Reach HANGYM</h2>

<div class="container">
    <div style="text-align:center">
        <h2>Contact Us</h2>
        <p><span>leave us </span>a message:</p>
    </div>
    <div class="row">
        <div class="column">
            <img src="images/bg1.jpg" style="width:100%">
        </div>
        <div class="column">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="email">Email</label>
                <input type="text"id="email" name="email" placeholder="enter email">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>

                <a href="mailto:hanningtonchumo99@gmail.com?Subject=Hello%20again" target="_top">Submit</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
