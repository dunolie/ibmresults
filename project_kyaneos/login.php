<!DOCTYPE html>
<html class="loginbody colorbackgroundreverse">
<?php
				include('scripts/connect_to_mysql.php');


?>
<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="IBM Team Project">
		<meta name="author" content="">
		<link rel="icon" href="assets/site/favicon.ico">
	<title>IBMTeam</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/user.css">
	 <link rel="stylesheet" href="custom.css">


</head><body class="loginbody colorbackground">

    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">
	<header>

	</header>

	<div class="card card-container">
	<h3 class="text-center" id="content1 "><i>Please login</i> </h2>
	<img src="assets/images/avatar.png" class="profile-img-card">

            <p class="card-name">Login Form</p>
            <form class="form-signin"  name="loginform" id="loginform" method="post" action="php/processlogin.php">
                <input class="form-control"  required="" placeholder="Email address" autofocus="" type="text" name="username" id="username" size="10">
                <input class="form-control" type="password" required="" placeholder="Password" type="password" name="userpass" id="userpass" size="10">
                <div class="checkbox">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
            </form><a href="#" class="forgot-password">Forgot your password?</a></div>


	</div>
      <div id="push"></div>



</body>













<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
