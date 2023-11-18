<?php
    // session_start();
    // //Nếu chưa đăng nhập thì chuyển hướng về trang đăng nhập
    // if(!isset($_SESSION['username'])){
    //     header('location:login.php');
    // }
    // //Nếu đăng nhập rồi thì hiển thị trang chủ
    // else{
    //     $username = $_SESSION['username'];
    // }
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");

    }
    
?>
<?php
	if((isset($_GET['logout']))&&($_GET['logout']==1)){
		unset($_SESSION['login']);
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Dashboard - WebphimTNPK</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
	<link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body id="page-top">

    <?php
        include("config/config.php");
    ?>
	<div id="wrapper">
        <?php
            include("modules/menu.php");
        ?>

		<div class="d-flex flex-column" id="content-wrapper">
			<div id="content">
                <?php
                    include("modules/header.php");
                    include("modules/main.php");
                ?>
			</div>
			
			<!-- <footer> -->
            <?php
                include("modules/footer.php");
            ?>
            <!-- </footer> -->
		</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
	<script src="assets/js/script.min.js"></script>
</body>
</html>