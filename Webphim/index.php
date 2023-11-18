<?php
//check login , logout
include("admin/config/config.php");
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}

if ((isset($_GET['logout'])) && ($_GET['logout'] == 1)) {
    unset($_SESSION['login']);
    header("Location:login.php");
}

$sql_lietke_danhmuc = "SELECT * FROM theloai ORDER BY IDTheLoai ASC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' id='bootstrap-css' href='./css/bootstrap.min.css' media='all' />
    <link rel="stylesheet" href="./css/Style.css">

    <title>TPNK</title>
</head>

<body>
    <div class="header index">
        <!-- <div class="bg-cover-header"></div> -->
        <div class="bg-header-blend">
            <div class="bg-header-cover">
                <!-- Navbar component -->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-js">
                    <div class="container-fluid nav-css">
                        <a class="navbar-brand navbar-logo-brand" href="#"><img src="./logo/Unionlogo.svg" alt="">TNPK
                            PHIM</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="#">Trang chủ</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Thể loại
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item text-white" href="?type=hanhdong">Hành động</a></li>
                                        <li><a class="dropdown-item text-white" href="?type=tinhcam">Tình cảm</a></li>
                                        <li><a class="dropdown-item text-white" href="?type=giadinh">Gia đình</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item dropdown-custom">
                                    <a href="" class="nav-link">
                                        Thể Loại
                                    </a>
                                    <ul class="subnav" aria-labelledby="navbarDropdown">
                                        <?php
                    $i = 0;
                    // giải thích: vòng lặp while sẽ lặp lại cho đến khi hết dữ liệu trong bảng theloai
                    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                        $i++; 
                    ?>
           

                                       
                                        <li><a href="index.php?action=listphimtheotheloai&theloai=<?php echo $row['TenTheLoai'];?>" class="dropdown-item text-white"><?php echo $row['TenTheLoai'];?></a></li>

                                        <?php
                    }
                    ?>
                                    </ul>
                                </li>
                                <!-- <li class="nav-item dropdown-custom">
                                    <a href="" class="nav-link">
                                        Thể Loại
                                    </a>
                                    <ul class="subnav">
                                        <li><a href="" class="dropdown-item text-white">Merchandise</a></li>
                                        <li><a href="" class="dropdown-item text-white">Extras</a></li>
                                        <li><a href="" class="dropdown-item text-white">Media</a></li>
                                    </ul>
                                </li> -->

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Top phim</a>
                                </li>


                            </ul>

                            <!-- <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> -->
                        </div>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <div class="btnSignout">
                                        <img src="./image/avatar.jpg" alt="" class="avatar-index">
                                        <a href="index.php?logout=1">
                                            <button type="button" class="btn-Sign-up-location text-white">Sign
                                                Out</button>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <!-- <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> -->
                        </div>
                    </div>
                </nav>

                <!-- End Navbar component -->
                <div class="bg-header-top">
                    <div class="container-header row">
                        <div class="col-6 wapper-left">

                            <div class="current-flim">
                                <div class="flim-name text-white">
                                    Mortal Engines
                                </div>
                                <div class="flim-description text-white">
                                    Một số mô tả về phim Một số mô tả về phim Một số mô tả về phim
                                </div>
                            </div>

                        </div>
                        <div class="col-6 wapper-right">
                            <div class="btn-play-curr-flim">
                                <img src="./logo/play-button.png" alt="" class="btn-play-img">
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("pages/main.php"); ?>
            </div>
        </div>

        <div class="footer row">
            <div class="col-4 footer-branch">
                <img src="./logo/Unionlogo.svg" alt="" class="footer-branch-logo">
                <div class="footer-branch-name text-white">TPNK PHIM</div>
            </div>
            <div class="col-4 footer-copyright">
                <div class="footer-copyright-top text-white">
                    Source Code Copy Right By TPNK Final Exam.
                </div>
                <div class="footer-copry-bottom text-white">
                    info@tpnk.com <br>
                    +33879222xx
                </div>
            </div>
            <div class="col-4 footer-social">
                <div class="social-logo-component">
                    <div>
                        <img src="./logo/gmail.png" alt="" class="footer-social-logo">
                        <div class="social-name text-white">Gmail</div>
                    </div>
                </div>
                <div class="social-logo-component">
                    <div>
                        <img src="./logo/facebook.png" alt="" class="footer-social-logo">
                        <div class="social-name text-white">Facebook</div>
                    </div>
                </div>
                <div class="social-logo-component">
                    <div>
                        <img src="./logo/twitter.png" alt="" class="footer-social-logo">
                        <div class="social-name text-white">Twitter</div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="./js/Login-Sign-up-Form.js"></script>
</body>

</html>
<?php
$mysqli -> close();
?>