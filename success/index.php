<?php
$servername = "localhost";
$username = "u180164016_urban";
$password = "Urbanic@123";
$conn = new mysqli($servername, $username, $password);

   
  if($conn === false)
      die("ERROR: Could not connect. " . mysqli_connect_error());
     
  $name = $_POST['name'];
  $email = $_POST['email'];
   $number = $_POST['number'];
   $service = $_POST['service'];
   $date = $_POST['date'];
   $address = $_POST['address'];
   $description = $_POST['description'];  
   $sql = "INSERT INTO 'urbanic_table'('name', 'email', 'number', 'service', 'date', 'address', 'description') VALUES ($name,  $email ,$number,$service,$date ,$address,$description)')";
   $to = "$email";
   $subject = "Urbanic | New Request from the Customer";
   $message = "
<html>
<head>
<title>UrbanIc</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<td>Customer Name</td>
<td>$name</td>
</tr>
<tr>
<td>Customer Email Address</td>
<td>$email</td>
</tr>
<tr>
<td>Contact Number</td>
<td>$number</td>
</tr>
<tr>
<td>Service Required</td>
<td>$service</td>
</tr>
<tr>
<td>Scheduled Date</td>
<td>$date</td>
</tr>
<tr>
<td>Customer Address</td>
<td>$address</td>
</tr>
<tr>
<td>Issue Description</td>
<td>$description</td>
</tr>
</table>
</body>
</html>";

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";

// More headers
$headers .= 'From: <bookings@icrepair.in>' . "\r\n";
$headers .= 'Cc: saicharan14996@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>






  <html lang="en">
<head>
    <title>Thank you </title>
      <link rel="shortcut icon" type="image/png" href="assets\images\favicon.png">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title" style="font-size:40px;">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body" style="line-height:30px;">Thanks a bunch for Reaching us ! we will soon reply back to you, in case of emergency reach us at :+91 9087886644</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright UrbanIC ©2020 | All Rights Reserved</p>
	</footer>
</body>
</html>