<!DOCTYPE html>

<html>
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


</head>

	<div id="wrap">
    <?php include_once("header.php");?>

    <body class="colorbackground">
	<div class="container">
	<?php
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		include("php/functions.php");
		$username=$_POST['username'];
		$firstname=$_POST['firstname'];
		$surname=$_POST['surname'];
		$emailadd=$_POST['emailadd'];


		$date=new DateTime($_POST['dob']);
		$dob = $date->format('Y-m-d H:i:s');
		$userpass=$_POST['userpass'];
		$secondpass=$_POST['secondpass'];
		$tnc=(isset($_POST['tnc'])?1:0);
		$salt=getSalt(16);
		$cryptpass=makeHash($userpass,$salt,50);
		// Used to check that submitted user does not exist already
		$userexists=false;
		$emailexists=false;
		// connect to database
		$db = createConnection();
		// check form details again in case javascript disabled form bypassed
		// javascript client side scripting
		// check username and email do not already exist
		$sql="select username,emailadd from users where username=? or emailadd=?";
		$stmt=$db->prepare($sql);
		$stmt->bind_param("ss",$username,$emailadd);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($userresult,$emailresult);

		while($row=$stmt->fetch()) {
			if($userresult==$username) {$userexists=true;}
			if($emailresult==$emailadd) {$emailexists=true;}
		}

		// check user is old enough, in this example users must be 16


		// Check submitted and calculated variables before storing
		if(!$userexists && !$emailexists && $userpass==$secondpass && isset($userpass) && filter_var($emailadd, FILTER_VALIDATE_EMAIL) && $tnc && isset($firstname) && isset($surname)) {

			// insert new user
			$insertquery="insert into users (username, firstname, surname, emailadd, dob, usertype, tnc, salt, userpass) values (?,?,?,?,?,2,?,?,?)";
			$inst=$db->prepare($insertquery);
			$inst->bind_param('sssssiss', $username, $firstname, $surname, $emailadd, $dob, $tnc, $salt, $cryptpass);
			$inst->execute();

			// check user inserted, if so create login form
			if($inst->affected_rows==1) {

		?>
					<div class="card card-container">
					<p class="card-name">Registration Details</p>

				<label>Welcome <?php echo $firstname." ".$surname; ?></label>
				<label>You can now login with your username <em><?php echo $username; ?></em></label>
				<section>
					<p class="card-name">Login</p>
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
					</form><a href="#" class="forgot-password">Forgot your password?</a>
				</section>
				</div>
			<?php } else {
				//feedback there was a problem adding the user
					echo "<p >There was a problem adding your details. Please contact the website administrators</p>";
				}

			} else {
			// registration failed either due to disabled javascript or other attempt to bypass validation
			?>
					<div class="card card-container booking">
					<h1>Registration failed</h1>

			<?php
				if($emailexists){ echo "<label>The email address $emailadd already exists.</label>"; }
				if($userexists){ echo "<label>The username $username already exists.</label>"; }
				if($userpass!=$secondpass){ echo "<label>The passwords do not match.</label>"; }
				if(!filter_var($emailadd, FILTER_VALIDATE_EMAIL)){ echo "<label>The email address is invalid.</label>"; }
			?>
				<label> You need to return to the registration page and try again</label>
			<?php
			}
			$stmt->close();

			$db->close();
			?>
			<form action="index.php">
				<button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Return</button>
			</form>

			</div>
	</div>
	<div class="push"></div>
	</div>
	<?php include_once('footer.php');?>
    </body>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>




</html>
