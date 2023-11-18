<!-- section Start -->
    <?php 
    session_start();

    // $_SESSION['alogin'] = $_POST['email'];
    // echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    //login php section end
    include('config/config.php');
    if (isset($_POST['login'])) {
        // giải thích: nếu login được nhấn thì thực hiện câu lệnh này
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql_login = "SELECT * FROM  adminaccount WHERE UserAD='" .$username. "'  and PassAD='" . $password . "'LIMIT 1";
        $row=mysqli_query($mysqli,$sql_login);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['login'] = $username;
            header("Location:index.php");
    
        } else {
            echo "<script>alert('Wrong username or password')</script>";
            

        }
    }
    //login php section end

        //forgot password php section start
       /*   if (isset($_POST['forgot'])) {-->
            $email = $_POST['email'];
            $contactno = $_POST['contactno'];
            $sql = "SELECT EmailId FROM tbladmin WHERE EmailId=:email and ContactNo=:contactno";
            $query = $dbh->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':contactno', $contactno, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
                $_SESSION['cemail'] = $_POST['email'];
                echo "<script type='text/javascript'> document.location = 'reset-password.php'; </script>";
            } else {
                echo "<script>alert('Invalid Details');</script>";
            }
        }
        //forgot password php section end  */


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form action="" method="POST" autocomplete="on" class="user">

                                        <div class="mb-3"><input class="form-control form-control-user" type="username"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter username..." name="username"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password"
                                                id="exampleInputPassword" placeholder="Password" name="password"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input
                                                        class="form-check-input custom-control-input" type="checkbox"
                                                        id="formCheck-1"><label
                                                        class="form-check-label custom-control-label"
                                                        for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100"
                                            type="submit" name="login"  id="login">Login</button>
                                        <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2"
                                            role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a
                                            class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i
                                                class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a id="forgot" class="small" href="forgot-password.html">Forgot
                                            Password?</a></div>
                                    <div class="text-center"><a class="small" href="register.php">Create an
                                            Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
</body>

</html>
