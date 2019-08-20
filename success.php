<?php
$conn = mysqli_connect("localhost", "u180164016_urban", "Urbanic@123", "u180164016_urban");
   
  if($conn === false)
      die("ERROR: Could not connect. " . mysqli_connect_error());
     
  $name = $_POST['name'];
  $email = $_POST['email'];
   $number = $_POST['number'];
   $service = $_POST['service'];
   $date = $_POST['date'];
   $address = $_POST['address'];
   $description = $_POST['description'];  
    $sql = "INSERT INTO data (name,email,number,service,date,address,description)VALUES 
              ('$name','$email','$number','$service','$date',$address','$description')";
if ($conn->query($sql) === TRUE) {
} else {
   
}

$values ="Name :". $name."\n\n Email :".$email."\n\n Contact Number :".$number."\n\n Service Opted :".$service."\n\n Date of Repair :".$date."\n\n Customer Address :".$address."\n\n Customer Description : ".$description;
$values_2 = "";
      mail('saicharan14996@gmail.com', 'New Request Captured',$values,"New Request from UrbanIC", implode("\r\n", $headers));
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
		<p class="main-content__body" data-lead-id="main-content-body" style="line-height:30px;">Thanks a bunch for Reaching me ! we will soon reply back to you in a while, in case of emergency reach us at :+91 9087886644</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright UrbanIC ©2019 | All Rights Reserved</p>
	</footer>
</body>
</html>