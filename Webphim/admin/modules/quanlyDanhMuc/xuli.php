<?php
include('../../config/config.php');
$tentheloai = $_POST['tentheloai'];
$idtheloai= $_GET['IDTheLoai'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO theloai(tentheloai) VALUE('" . $tentheloai . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyDanhMuc');
} elseif (isset($_POST['suadanhmuc'])) {
    $sql_update = "UPDATE  theloai SET TenTheLoai ='".$tentheloai. "' WHERE IDTheLoai='" . $idtheloai . "'  ";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlyDanhMuc');
} else {
    $delID = $idtheloai;
    $sql_delete = "DELETE FROM theloai  WHERE IDTheLoai ='".$delID."' ";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../index.php?action=quanlyDanhMuc');
}
$mysqli -> close();
?>