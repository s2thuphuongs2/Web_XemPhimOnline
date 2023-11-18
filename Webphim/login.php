<?php 
    session_start();

    // $_SESSION['alogin'] = $_POST['email'];
    // echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    //login php section end
    include('admin/config/config.php');
    if (isset($_POST['login'])) {
        // giải thích: nếu login được nhấn thì thực hiện câu lệnh này
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql_login = "SELECT * FROM  useraccount WHERE Username='" .$username. "'  and Password='" . $password . "'LIMIT 1";
        $row=mysqli_query($mysqli,$sql_login);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['login'] = $username;
            header("Location:index.php");
    
        } else {
            echo "<script>alert('Wrong username or password')</script>";
            

        }
    }
    if((isset($_GET['signupthanhcong']))&&($_GET['signupthanhcong']==1)){
        echo "<script>alert('Dang Ki Thanh Cong')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Style.css">
    <title>Document</title>
</head>
<body>
    <div class="Login-form">
        <div class="container-login">
            <div class="row boxshadow">
                <div class="col-sm-6 col-12 input-form input-form-login">
                    <h3 class="Login-Sign-up-banner">
                        Member Login
                    </h3>
                    <span class="Login-Sign-up-note text-white">
                        Please fill in your basic info
                    </span>
                    <div class="container-form">
                        <form action="" method="POST" autocomplete="on">
                            <!-- username -->
                            <div class="account">
                                <img src="./logo/login.png" alt="account" class="account-img">
                                <input type="text" name="username" placeholder="marinaca22">
                            </div>
                            <!-- password -->
                            <div class="account-error"></div>
                            <div class="password">
                                <img src="./logo/password.png" alt="pass" class="password-img">
                                <input type="password" placeholder="password" name="password">
                            </div>
                            <div class="pass-error"></div>
                            <input type="submit" name="login" value="login" class="submit text-white">
                        </form>
                        <a href="" class="forgot-pass">Forgot your password?</a>
                    </div>
                </div>
                <div class="sign-up col-sm-6 col-12">
                    <div class="sign-up-bg-img"></div>
                    <div class="sign-up-content text-white">
                        <div class="sign-up-dir">
                            <h2 class="sign-up-heading">Sign Up</h2>
                            <div class="sign-up-paragraph">Watch more video with an account</div>
                        </div>
                        <div class="sign-up-with-container">
                            <div class="sign-up-with-item">
                                <div>
                                    <img src="./logo/gmail.png" alt="" class="icon icon-gmail">
                                    <div class="dir-name">Gmail</div>
                                </div>
                            </div>
                            <div class="sign-up-with-item">
                                <div>
                                    <img src="./logo/facebook.png" alt="" class="icon icon-face">
                                    <div class="dir-name">Facebook</div>
                                </div>
                            </div>
                            <div class="sign-up-with-item">
                                <div>
                                    <img src="./logo/twitter.png" alt="" class="icon icon-twitter">
                                    <div class="dir-name">Twitter</div>
                                </div>
                            </div>
                        </div>
                        <div class="sign-up-cond">
                            <input type="checkbox" name="" id="cond">
                            <span class="sign-up-note">By signing up | agree with <a href="" class="cond-link">terms and conditions</a></span>
                        </div>
                        <a href="SignUp.php" class="sign-up-link text-white">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/Login-Sign-up-Form.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
</body>
</html>
<?php
$mysqli -> close();
?>