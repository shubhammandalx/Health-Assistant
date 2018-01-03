<?php include 'Actions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Assist</title>
    <link rel="shortcut icon" href="assets/admin_page/dist/img/ico/favicon.png" type="image/x-icon">
    <link href="assets/admin_page/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/admin_page/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="assets/admin_page/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <div class="login-wrapper">
        <div class="back-link">
            <a href="index.php" class="btn btn-success">Back to Home</a>
        </div>
        <div class="container-center lg">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Doctor Register</h3>
                            <small><strong>Please enter your data to register.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="registerDoctor.php" id="signupform" method="post">
                    <div class="row">
                        	<?php include 'errors.php'?>
                        </div><br><br>
                            <br><br>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Firstname</label>
                                <input type="text" id="firstName" class="form-control" name="firstName" value="<?php echo $firstName;?>">                           
                            </div>
                           
                            <div class="form-group col-lg-6">
                                <label>Lastname</label>
                                <input type="text" id="lastName" class="form-control" name="lastName" value="<?php echo $lastName;?>">
                            </div>
                             <div class="form-group col-lg-6">
                                <label>Place</label>
                                <input type="text" id="placename" class="form-control" name="placeName" value="<?php echo $placeName;?>">                           
                            </div>
                            <div class="form-group col-lg-6">
                                <label>City</label>
                                <input type="text" id="city" class="form-control" name="city" value="<?php echo $city;?>">                           
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Fee:</label>
                                <input type="number" id="fee" class="form-control" name="fee" value="<?php echo $fee;?>">                           
                            </div>  
                             <div class="form-group col-lg-6">
                                <label>Phone No:</label>
                                <input type="number" id="phone" class="form-control" name="phoneNo" value="<?php echo $phoneNo;?>">                               
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="text" id="emailId" class="form-control" name="email" value="<?php echo $email;?>">
                                <span class="help-block small">Your address email to contact</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Username</label>
                                <input type="text" id="username" class="form-control" name="username" value="<?php echo $username;?>">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" id="password" class="form-control" name="password">
                                <span class="help-block small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Retype Password</label>
                                <input type="password" id="password2" class="form-control" name="password2">
                                <span class="help-block small">Again password please</span>
                            </div>
                        </div>
                        
                        <div align="center">
                            <input class="btn btn-primary" type="submit" name="registerDoctorButton" value="Register">
                            <br><br>
                            <p>Already a member?</p>
                        	<a href="loginDoctor.php" class="btn btn-primary">LOGIN</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/admin_page/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="assets/admin_page/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>