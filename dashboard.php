<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
<meta name="viewpoart" content="width=device-width, initial-scale=1.0">
    <title>
Welcome
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<header>
<a href="index.php"><img src="ram.jpg" height="800px" width="1600px">rweb</a>
</header>
<nav>
<a href="index.php">home</a>
<br>
<a href="login.php">login</a>
<br>
<a href="weather.php">signup</a>
<br>
<a href="about.html">about</a>
<br>
<a href="contact.html">contact-us</a>
</nav>
<main>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to rweb.</h1>
    <p>
follow the below links for different applications
<ol>
<li>
<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
</li>
<li>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</li>
<li>
<a href="wether.html">wether application</a>
</li>
<li>
<a href="wether2.html">second wether application</a>
</li>
<li>
<a href="calculater.html">calculater</a>
</li>
<li>
<a href="currencyConverter.html">currency converter</a>
</li>
</ol>
</p>
</main>
<hr>
<footer>
<p>
<a href="about.html">about</a>click hear to go to about page
<br>
<a href="contact.html">contact-us</a>click hear to go to contact page
<br>
this website is developed on 23-02-2023
</p>
</footer>
</body>
</html>