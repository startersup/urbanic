<?php
$conn = mysqli_connect("localhost", "u319803083_data", "Saicharan@123", "u319803083_seo");
   
  if($conn === false)
      die("ERROR: Could not connect. " . mysqli_connect_error());
     
  $name = $_POST['name'];
  $email = $_POST['email'];
   $number = $_POST['number'];
   $subject = $_POST['subject'];
   $mess = $_POST['message'];
  
    $sql = "INSERT INTO data (name,email,number,subject,message)VALUES 
              ('$name','$email','$number','$subject','$mess')";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$values ="Name :". $name."\n\n Email :".$email."\n\n Contact Number :".$number."\n\n Subject :".$subject."\n\n Message : ".$mess;
$values_2 = "";
      mail('saicharan14996@gmail.com', 'New Request Captured',$values,"New Request from SEOTechie", implode("\r\n", $headers));
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
		<p class="main-content__body" data-lead-id="main-content-body" style="line-height:30px;">Thanks a bunch for Reaching me ! i will soon reply back to you with a optimal solution, in case of emergency reach me at :+91 9551936390</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2018 | All Rights Reserved</p>
	</footer>
</body>
</html>