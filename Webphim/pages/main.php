<?php
if ((isset($_GET['action']))&&(isset($_GET['idphim']))){
    include("mainoption/watch.php");
}
elseif((isset($_GET['action']))&&(($_GET['action']=='listphimtheotheloai'))&&(isset($_GET['theloai']))){
    include("mainoption/listphimttl.php");

}else{
include("mainoption/listphim.php");
}

?>
