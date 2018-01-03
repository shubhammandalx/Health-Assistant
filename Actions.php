<?php include 'config.php';?>
<?php 
    session_start();
    $username = '';
    $email = '';
    $firstName = '';
    $lastName = '';
    $placeName = '';
    $city = '';
    $fee = '';
    $phoneNo = '';
    $title = '';
    $description = '';
    $date ='';
    
    $errors = array();
    
    if(isset($_POST['registerPatientButton'])) {
        $username =mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
        $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
        $phoneNo = mysqli_real_escape_string($conn,$_POST["phoneNo"]);
    
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        
        if($password != $password2) {
            array_push($errors, "Passwords don't match");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            $qRegisterUser = "INSERT INTO patient(username, password, email, firstName, lastName, phoneNo) 
                                VALUES ('$username','$password','$email','$firstName','$lastName','$phoneNo')";
            mysqli_query($conn, $qRegisterUser);
            
            $_SESSION['username'] = $username;
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";
            
            $qGetId = "SELECT id, username FROM patient";
            $result =$conn->query($qGetId);
            while($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
            }
            
            header('location: dashboardPatient.php');
            
            
        }
    }
    
    if(isset($_POST['loginPatientButton'])) {
        $username =mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            
            $qValidate = "SELECT * from patient WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $qValidate);
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
            }
            
            if(mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['id'] = $id;
                $_SESSION['type'] = "P";
                header('location: dashboardPatient.php');
                echo isset($_SESSION['username']);
                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    
    
    
    if(isset($_POST['registerDoctorButton'])) {
        
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $firstName =mysqli_real_escape_string($conn,$_POST["firstName"]);
        $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
        $placeName = mysqli_real_escape_string($conn,$_POST["placeName"]);
        $city = mysqli_real_escape_string($conn,$_POST["city"]);
        $fee = mysqli_real_escape_string($conn,$_POST["fee"]);
        $phoneNo = mysqli_real_escape_string($conn,$_POST["phoneNo"]);
        
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        
        if($password != $password2) {
            array_push($errors, "Passwords don't match");
        }
        
        if(count($errors) == 0) {
            echo $firstName;
            echo $lastName;
            echo $placeName;
            echo $city;
            echo $fee;
            echo $phoneNo;
            echo $email;
            echo $username;
            echo $password;
            echo $password2;
            
            $password = md5($password);
            $qRegisterDoctor = "INSERT INTO doctors (firstName, lastName, placeName, city, fee, phoneNo, email, username, password)
                                VALUES ('$firstName','$lastName','$placeName','$city','$fee','$phoneNo', '$email', '$username', '$password')";
            mysqli_query($conn, $qRegisterDoctor);
            
            
            $_SESSION['username'] = $username;
            
            $_SESSION['sucess'] = "You are logged in";
            $_SESSION['type'] = "P";
            
            $qGetId = "SELECT id, username FROM doctors";
            $result =$conn->query($qGetId);
            while($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
            }
            header('location: dashboardDoctor.php');
        } else {
        }
    }
    
    if(isset($_POST['loginDoctorButton'])) {
        $username =mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            
            $qValidate = "SELECT id,username,password from doctors WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $qValidate);
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
            }
            echo mysqli_num_rows($result);
            echo isset($_SESSION['username']);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['sucess'] = "You are logged in";
                $_SESSION['type'] = "D";
                $_SESSION['id'] = $id;
                header('location: dashboardDoctor.php');
                echo isset($_SESSION['username']);
                
            } else {
                array_push($errors, "The username/password is wrong!");
            }
        }
    }
    
    if(isset($_POST['scheduleAnAppointment'])) {
        
        
        $title =mysqli_real_escape_string($conn,$_POST["title"]);
        $description = mysqli_real_escape_string($conn,$_POST["description"]);
        $doctorId = mysqli_real_escape_string($conn, $_POST["doctorId"]);
        
        if(isset($_SESSION['id'])) {
            $patientId = $_SESSION['id']; 
        }
        
        if(empty($doctorId)) {
            array_push($errors, "Fatal Error");
        }
        if(empty($patientId)) {
            if(isset($patientId)) {
                array_push($errors, "Fatal Error");
            } else {
                array_push($errors, "User Not Logged In");
            }
        }
        
        $qSchedule = "INSERT INTO appointment (doctorId, patientId, title, description)
                                VALUES ('$doctorId','$patientId','$title','$description')";
        mysqli_query($conn, $qSchedule);
        header('location: AppointmentsPatient.php');
    }
    
    if(isset($_GET['logout'])) {
        unset($_SESSION['username'],$_SESSION['id'],$_SESSION['type']);
    }
    
    
?>