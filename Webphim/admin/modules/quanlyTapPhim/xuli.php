<?php
include('../../config/config.php');
$sotap = $_POST['SoTap'];
$source = $_POST['SourcePhim'];

$idphim= $_GET['IDPhim'];
$idtapphim = $_GET['IDTapPhim'];
if (isset($_POST['themtapphim'])) {
    $sql_them = "INSERT INTO tapphim(IDPhim,TapSo,SourcePhim) VALUE('" . $idphim . "','" . $sotap . "','" . $source . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyTapPhim&query=lietke&IDPhim='.$idphim);
} elseif (isset($_POST['suatapphim'])) {
    $sql_update = "UPDATE  tapphim SET TapSo ='".$sotap. "' , SourcePhim ='".$source. "'  WHERE IDTapPhim='" . $idtapphim . "'  ";
    mysqli_query($mysqli, $sql_update);
 header('Location:../../index.php?action=quanlyTapPhim&query=lietke&IDPhim='.$idphim);

} else {
    $delID = $idtapphim;
    $sql_delete = "DELETE FROM tapphim  WHERE IDTapPhim ='".$delID."' ";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../index.php?action=quanlyTapPhim&query=lietke&IDPhim='.$idphim);
}
$mysqli -> close();
?>