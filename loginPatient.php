<?php include 'Actions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Health Assist</title>

<!-- Favicon and touch icons -->
<link rel="shortcut icon"
	href="assets/admin_page/dist/img/ico/favicon.png" type="image/x-icon">


<!-- Bootstrap -->
<link href="assets/admin_page/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />
<!-- Bootstrap rtl -->
<!--<link href="assets/admin_page/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
<!-- Pe-icon-7-stroke -->
<link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css"
	rel="stylesheet" type="text/css" />
<!-- style css -->
<link href="assets/admin_page/dist/css/stylehealth.min.css"
	rel="stylesheet" type="text/css" />
<!-- Theme style rtl -->
<!--<link href="assets/admin_page/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>
	<!-- Content Wrapper -->
	<div class="login-wrapper">
		<div class="back-link">
			<a href="index.php" class="btn btn-success">Back to Home</a>
		</div>
		<div class="container-center">
			<div class="panel panel-bd">
				<div class="panel-heading">
					<div class="view-header">
						<div class="header-icon">
							<i class="pe-7s-unlock"></i>
						</div>
						<div class="header-title">
							<h3>Patient Login</h3>
							<small><strong>Please enter your credentials to login.</strong></small>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<form action="loginPatient.php" id="loginForm" method="post">
					<div class="row">
                        	<?php include 'errors.php'?>
                        </div><br><br>
						<div class="form-group">
							<label class="control-label" for="username">Username</label> <input
								type="text" placeholder="username"
								title="Please enter you username" value="<?php echo $username;?>"
								name="username" id="username" class="form-control">

						</div>
						<div class="form-group">
							<label class="control-label" for="password">Password</label> <input
								type="password" title="Please enter your password"
								placeholder="******" value="" name="password"
								id="password" class="form-control"> <span
								class="help-block small">Your strong password</span>
						</div>
						<div>
							<input class="btn btn-primary" type="submit" name="loginPatientButton" value="Login"/>
							<a class="btn btn-warning" href="registerPatient.php">Register</a>
						</div>
						
						<div class="row">
							<div class="col-md-12">
    						<?php if(isset($_SESSION['username'])) :?>
    							<h2>Already logged in ! </h2>
    							<a class="btn btn-primary" href="dashboardPatient.php">LOGIN NOW</a>
    						<?php endif?>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- jQuery -->
	<script src="assets/admin_page/plugins/jQuery/jquery-1.12.4.min.js"
		type="text/javascript"></script>
	<!-- bootstrap js -->
	<script src="assets/admin_page/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>
</body>
</html>