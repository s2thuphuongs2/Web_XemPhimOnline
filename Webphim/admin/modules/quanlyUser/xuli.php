<?php
require "../../config/config.php";

$username = $_POST['Username'];
$ngaysinh = $_POST['NgaySinh'];
$password = $_POST['Password'];
$hoten =$_POST['HoTen'];
$mail =$_POST['Mail'];
$userid= $_GET['UserID'];

if (isset($_POST['themuser'])) {
    $sql_them = "INSERT INTO useraccount(Username,Password,HoTen,NgaySinh,Mail) VALUE('" . $username . "','" . $password . "','" . $hoten . "','" . $ngaysinh . "','" . $mail . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyUser&query=lietke');
} elseif (isset($_POST['suauser'])) {
    $sql_update = "UPDATE  useraccount SET Username ='".$username. "',Password ='".$password. "' ,HoTen ='".$hoten. "' , NgaySinh ='".$ngaysinh. "' , Mail ='".$mail. "' WHERE UserID='" . $userid . "'  ";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlyUser&query=lietke');
} else {
    $delID = $userid;
    $sql_delete = "DELETE FROM useraccount WHERE UserID ='".$delID."' ";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../index.php?action=quanlyUser&query=lietke');
}
$mysqli -> close();
?>
