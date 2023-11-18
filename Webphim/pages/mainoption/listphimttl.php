<!-- <p>Danh sach phim</p> -->
<!--  lay du lieu  -->
<?php
$sql_lietke_phim = "SELECT * FROM phim inner join theloai on phim.IdTheLoai = theloai.IdTheLoai Where  TenTheLoai='$_GET[theloai]' ORDER BY IDPhim ASC";
$query_lietke_phim = mysqli_query($mysqli, $sql_lietke_phim);
if (!$query_lietke_phim) {
    die('Error: ' . mysqli_error($mysqli));
}

?>

<div class="content">
    <div class="container-block-content">
        <div class="block-content-head">
            <a href="" class="block-content-describe text-white"> Phim <?php echo $_GET['theloai'] ;?><img src="./image/down-arrow.png" alt="" class="dropdown-icon"></a>
        </div>


        <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_phim)) {
                        $i++;
                        
                        if ($i%4==1){echo '<div class="block-content-list-items "style=" width: 1724px;    height: 410px ;"> <div class="row" style="color:red; width: 828px;    height: 315px ;">';}
                 
    ?>
                    <div class="block-content-item col-md-3 col-10 col-sm-5"   style=" width: 207px;    height: 410px ;"  >
                        <a href="index.php?action=xem&idphim=<?php echo $row['IDPhim'] ;?>&tap=1">
                        <img src="admin\modules\quanlyPhim\upload/<?php echo $row['Banner'];?>" alt="" class="block-content-item-img" style="color:red; width: 183px;    height: 275px ;">
                        <div class="block-content-item-body">
                            <div class="block-content-item-name text-white"  style=" width: 207px;    height: 125px ;"><?php echo $row['TenPhim'];?></div>
                        </div>
                        </a>
                    </div>

<?php        if ($i%4==0){echo "</div></div>";} ?>
<?php  } ?>


        <!-- end main -->
    </div>
</div>