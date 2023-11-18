<?php 
include("admin/config/config.php");
$mysqli = new mysqli("localhost","root","","webphim1");
if (isset($_POST['SignUp'])){
    $hoten=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cfpass=$_POST['cfpass'];
    $ngaysinh=$_POST['ngaysinh'];
    $sql_login = "SELECT * FROM  useraccount WHERE Username='" .$username. "' LIMIT 1";
    $row=mysqli_query($mysqli,$sql_login);
    $count = mysqli_num_rows($row);
    if ($count < 1) {
        if($ngaysinh==''){
            $ngaysinh='1000-00-00';
            
        }
        
        if($cfpass==$password){
            $password=md5($password);
            $sql_signup ="INSERT INTO useraccount(Username,Password,HoTen,NgaySinh,Mail) VALUE('" . $username . "','" . $password . "','" . $hoten . "','" . $ngaysinh . "','" . $email . "')";
            mysqli_query($mysqli,$sql_signup);
            header('Location:login.php?signupthanhcong=1');
        
    

    } 
}else {
    echo "<script>alert('Username da ton tai')</script>";
    

}


     

}

        



    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Style.css">
    <title>Document</title>
</head>
<body>
    <div class="sign-up-form">
        <div class="container-sign-up row">
            <div class="col-sm-6 col-12 input-form input-form-sign-up">
                <h3 class="Login-Sign-up-banner">
                    Sign Up
                </h3>
                <span class="Login-Sign-up-note text-white">
                    Please fill in your basic info
                </span>
                <div class="container-form">
                    <form action="SignUp.php" method="POST" novalidate>
                        <div class="full-name">
                            <img src="./logo/login.png" alt="full-name" class="full-name-img">
                            <input type="text" name="fullname" placeholder="Full Name" class="full-name-input">
                        </div>
                        <div class="full-name-err"></div>
                        <div class="full-name">
                            <img src="./logo/login.png" alt="full-name" class="full-name-img">
                            <input type="text" name="username" placeholder="Username" class="full-name-input">
                        </div>
                        <div class="full-name-err"></div>
                        <div class="full-name">
                            <img src="./logo/login.png" alt="full-name" class="full-name-img">
                            <input type="text" name="ngaysinh" placeholder="0000-02-21" class="full-name-input">
                        </div>

                        <div class="email">
                            <img src="./logo/gmail.png" alt="account" class="email-img">
                            <input type="email" name="email" placeholder="Email Address" class="email-input">
                        </div>
                        <div class="mail-err"></div>

                        <div class="password">
                            <img src="./logo/password.png" alt="password" class="password-img">
                            <input type="password" name="password" placeholder="Password" class="pass-sign-up-input">
                        </div>
                        <div class="pass-sign-up-err"></div>

                        <div class="confirm-pass">
                            <img src="./logo/password.png" alt="confirm-pass" class="confirm-pass-img">
                            <input type="password" name="cfpass" placeholder="Confirm Password" class="confirm-pass-input">
                        </div>
                        <div class="confirm-pass-err"></div>

                        <button type="submit" name="SignUp"class="btn-create-account submit-sign-up-js text-white">
                            CREATE ACCOUNT
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-sm-6 col-12 sign-up-img-form">
                <!-- <div class="sign-up-bg"></div> -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/Login-Sign-up-Form.js"></script>
</body>
</html>
<?php
$mysqli -> close();
?>