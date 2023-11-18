<?php
$idphim = $_GET['idphim'];
$tap = $_GET['tap'];
$sql_taphim = 'SELECT tapphim.IDTapPhim, tapphim.IDPhim, tapphim.SourcePhim,phim.TenPhim from tapphim ,phim where tapphim.IDPhim=' . $idphim . ' and tapphim.TapSo =' . $tap . ' and tapphim.IDPhim = Phim.IDPhim limit 1';

$query_tapphim = mysqli_query($mysqli, $sql_taphim);
$sql_btntap = "Select * from tapphim where IDPhim = $idphim  ";
$query_btntap = mysqli_query($mysqli, $sql_btntap);
?>
<div class="content">
    <div class="container-block-content">
        <?php

        $i = 0;
        while ($rowx = mysqli_fetch_array($query_tapphim)) {
            $i++;
   
        ?>
        <div class="block-content-head">
            <a href="" class="block-content-describe text-white"><?php echo $rowx['TenPhim'] ?> <img
                    src="./image/down-arrow.png" alt="" class="dropdown-icon"></a>
        </div>
        <div">


            <div class="block-content-list-items ">
                <iframe width="1280" height="720"
                    src="https://drive.google.com/file/d/<?php echo $rowx['SourcePhim']; ?>/preview">

                </iframe>

            </div>
            <?php
        }
            ?>

    </div>
    <div class="container-block-content " data-masonry="">
        
    <div id="halim-list-server">
                     <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane active server-1" id="server-0">
                           <div class="halim-server">
                              <ul class="halim-list-eps ">
                                <?php $i=0;
                                
                              while ($rowy = mysqli_fetch_array($query_btntap)) {

            $i++;
          
        ?>
                                 <li class="halim-episode">
                                    <a href="index.php?action=xem&idphim=<?php echo $idphim?>&tap=<?php echo $rowy['TapSo']?>">
                                    <span class="halim-btn halim-btn-2 active halim-info-1-1 box-shadow" data-post-id="37976" data-server="1" data-episode="1" data-position="first" data-embed="0" data-title="Xem phim Tên Phim - Tập 1" data-h1="Tên Phim - tập 1"><?php echo $rowy['TapSo']?>
                                </span>
                                </a>
                            </li>
<?php } ?>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
    </div>
</div>
</div>