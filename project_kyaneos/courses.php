<!DOCTYPE html>
<?php
	session_start();
	include('php/connect_to_mysql.php');
	include('php/functions.php');
	$db=createConnection();


?>
<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>
<html lang="en">
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
	<link href ="assets/css/styles.css" rel = "stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<!-- Custom Css - rather than alter bootstrap files -->
	<link rel="stylesheet" href="assets/css/stylesheet1.css">


</head>
<body>
	<div id="wrap">
	 <!-- Fixed navbar -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="admin/index.html">Admin</a></li>
							<li><a href="register.php">Register</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Login <span class="caret"></span></a>
								<ul class="dropdown-menu">
								<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
									<div id="login-overlay" class="modal-dialog">
									  <div class="modal-content">
										  <div class="modal-header">
											  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
											  <h4 class="modal-title" id="myModalLabel">Login to ibmresults.com</h4>
										  </div>
										  <div class="modal-body">

											  <div class="row">
												  <div class="col-xs-6">
													  <div class="well">
														  <form id="loginForm" method="POST" action="php/processlogin.php" novalidate="novalidate">
															  <div class="form-group">
																  <label for="username" class="control-label">Username</label>
																  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
																  <span class="help-block"></span>
															  </div>
															  <div class="form-group">
																  <label for="password" class="control-label">Password</label>
																  <input type="password" class="form-control" id="userpass" name="userpass" value="" required="" title="Please enter your password">
																  <span class="help-block"></span>
															  </div>
															  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
															  <div class="checkbox">
																  <label>
																	  <input type="checkbox" name="remember" id="remember"> Remember login
																  </label>
																  <p class="help-block">(If this is a private computer)</p>
															  </div>
															  <button type="submit" class="btn btn-success btn-block">Login</button>
															  <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
														  </form>
													  </div>
												  </div>
												  <div class="col-xs-6">
													  <p class="lead">Register now for <span class="text-success">FREE</span></p>
													  <ul class="list-unstyled" style="line-height: 2">
														  <li><span class="fa fa-check text-success"></span> See all your Results</li>
														  <li><span class="fa fa-check text-success"></span> Be Cool</li>
														  <li><span class="fa fa-check text-success"></span> Get top Grades</li>
														  <li><span class="fa fa-check text-success"></span> Be a Company tool</li>
														  <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new students)</small></li>
														  <li><a href="/read-more/"><u>Read more</u></a></li>
													  </ul>
													  <p><a href="/new-customer/" class="btn btn-info btn-block">Yes please! Register me now!</a></p>
												  </div>
											  </div>
										  </div>
									  </div>
								  </div>
									<li role="separator" class="divider"></li>
									<li><a href = "/login/logout.php" class="fa fa-star-o"> Log Out</a></li>
								</ul>
							</li>
						</ul>
						<div class="col-md-3 pull-right">
								<form class="navbar-form" role="search">
										<div class="input-group">
												<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
												<div class="input-group-btn">
														<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i></button>
												</div>
										</div>
								</form>
						</div>
					</div><!--/.nav-collapse -->
				</div>
			</nav>

			<div class="container">

			<!-- Main component for a primary marketing message or call to action -->
				<div class="jumbotron">
					<div class="row">
						<div class="col-md-5">
							<img src="assets/images/image1.jpg" class="img-responsive">
						</div>
						<div class="col-md-6">
							<H2> Featured Course </H2>
							<h3> Getting Started with IBM Bluemix</h3>
							<p class="mastfont">This free, self-paced course will help you understand the fundamentals of cloud computing, Bluemix, services, 
							DevOps, containers, Cloud Foundry, and best practices for agile and test-driven development </p>
							<a href="#" class="button">More Information</a>
						</div>
					</div>
				</div>
			</div> <!-- /container -->

			<footer>
				<div class="container">
					<div class="row">
					  <ul class="list-unstyled">
						<li class="col-md-3 col-sm-4 col-xs-6">
						  <a href="privacy.php" class="text-muted">Privacy</a>
						</li>
						<li class="col-md-3 col-sm-4 col-xs-6">
						  <a href="tandcs.html" class="text-muted">Terms</a>
						</li>
						<li class="col-md-3 col-sm-4 col-xs-6">
						  <a href="404.html" class="text-muted">Accessibility</a>
						</li>
						<li class="col-md-3 col-sm-4 col-xs-6">
						  <a href="404.html" class="text-muted">Cookie Policy</a>
						</li>
					  </ul>
					 <p>&copy; 2016 Project Kyaneos</p>
					</div><!--/row-->
				</div><!--/container-->
			</footer>
	</div> <!--end wrapper -->
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
