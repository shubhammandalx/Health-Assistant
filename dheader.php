<?php include 'Actions.php';?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Health Assist Patient Portal</title>

<link rel="shortcut icon"
	href="assets/admin_page/dist/img/ico/favicon.png" type="image/x-icon">
<link
	href="assets/admin_page/plugins/jquery-ui-1.12.1/jquery-ui.min.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />
<link href="assets/admin_page/plugins/lobipanel/lobipanel.min.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/plugins/pace/flash.css" rel="stylesheet"
	type="text/css" />

<link href="assets/admin_page/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/themify-icons/themify-icons.css"
	rel="stylesheet" type="text/css" />
<link href="assets/admin_page/plugins/toastr/toastr.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/plugins/emojionearea/emojionearea.min.css"
	rel="stylesheet" type="text/css" />

<link href="assets/admin_page/plugins/monthly/monthly.css"
	rel="stylesheet" type="text/css" />
<link href="assets/admin_page/dist/css/stylehealth.min.css"
	rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition sidebar-mini">

	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo"> <span class="logo-mini"> <img
					src="assets/admin_page/dist/img/mini-logo.png" alt="">
			</span> <span class="logo-lg"> <img
					src="assets/admin_page/dist/img/logo.png" alt="">
			</span>
			</a>
			<nav class="navbar navbar-static-top ">
				<a href="index.php" class="sidebar-toggle" data-toggle="offcanvas"
					role="button"> <span class="sr-only">Toggle navigation</span> <span
					class="fa fa-tasks"></span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown dropdown-user admin-user"><a
							href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
								<div class="user-image">
									<img src="assets/admin_page/dist/img/avatar4.png"
										class="img-circle" height="40" width="40" alt="User Image">
								</div>
						</a>
								<ul class="dropdown-menu">
                                    <li><a href="index.php?logout='1'"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
							</ul></li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">

			<div class="sidebar">

				<div class="user-panel">
					<div class="image pull-left">
						<img src="assets/admin_page/dist/img/avatar5.png"
							class="img-circle" alt="User Image">
					</div>
					<div class="info">
						<h4>Welcome</h4>
						<?php if(isset($_SESSION['username'])) :?>
                            <p><?php echo $_SESSION['username']?></p>
                        <?php endif?>
					</div>
				</div>


				<ul class="sidebar-menu">
					<li id="first-menu" class="active"><a href="dashboardDoctor.php"><i
							class="fa fa-hospital-o"></i><span>Dashboard</span> </a></li>

					<li id="second-menu"><a href="appointmentsDoctor.php"><i
							class="fa fa-hospital-o"></i><span>Appointments</span> </a></li>
				</ul>
			</div>

		</aside>
		<div class="content-wrapper">

			<section class="content-header">