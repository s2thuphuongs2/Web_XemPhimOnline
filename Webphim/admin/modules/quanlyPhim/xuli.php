<?php
include('../../config/config.php');
//default
if (isset($_POST['themphim'])||isset($_POST['suaphim'])){
$luotxem=0;

if (isset($_POST['Nam'])){
    if($_POST['Nam']==''){  $nam=date("Y");}
    else{$nam = $_POST['Nam'];}
}
// lấy id thể loại bằng tên

$tentheloai = $_POST['TenTheLoai'];
$sql_IDtheloaiBytentheloai = "SELECT IdTheLoai FROM theloai WHERE TenTheLoai='" . $tentheloai . "' ";
$query_IDtheloai=mysqli_query($mysqli, $sql_IDtheloaiBytentheloai);
while ( $rowp = mysqli_fetch_array($query_IDtheloai))
{
    $idtheloai = $rowp['IdTheLoai'];

}
echo $rowp;
//them
$tenphim =$_POST['TenPhim'];

if (isset($_POST['Nam'])){
    if($_POST['Nam']==''){  $nam=date("Y");}
    else{$nam = $_POST['Nam'];}
}
$nhasanxuat = $_POST['NhaSanXuat'];
$trangthai=$_POST['TrangThai'];
$sotap=$_POST['SoTap'];
$sotapdachieu=$_POST['SoTapDaChieu'];
$thoiluong=$_POST['ThoiLuong'];
$dienvien=$_POST['DienVien'];
$daodien=$_POST['DaoDien'];
$quocgia=$_POST['QuocGia'];
$noidung=$_POST['NoiDung'];

//xu li hinh anh
 $banner = $_FILES['Banner']['name'];   
$banner_tmp = $_FILES['Banner']['tmp_name'];  
$banner=time().'_'.$banner;
}
$idphim=$_GET['IDPhim'];



 

if (isset($_POST['themphim'])) {
    $isValid = true;
    // validate TenPhim field
    // giải thích: giá trị isValid sẽ được thay đổi nếu có lỗi
    $tenphim = $_POST['TenPhim'];
    if($tenphim == null || $tenphim == ''){
        // giải thích: nếu không nhập tên thì isValid = false, sau đó sẽ hiển thị lỗi và tiếp tục validate các trường khác
        // còn nếu như return False thì sẽ không validate các trường khác được nữa và nó sẽ trả về kết quả ngay lập tức (nhảy về xuli.php)
        $isValid = false;
        $errors['TenPhim'] = 'Bạn chưa nhập tên phim.';
    }
    // validate other fields
    if ($isValid) {
    // insert data into database
        $sql_them = "INSERT INTO phim(TenPhim,IdTheLoai,SoTap,SoTapDaChieu,ThoiLuong,NhaSanXuat,QuocGia,Nam,DienVien,DaoDien,Banner,NoiDung,TrangThai,LuotXem) VALUE('" . $tenphim . "','" . $idtheloai . "','" . $sotap . "','" . $sotapdachieu . "','" . $thoiluong . "','" . $nhasanxuat . "','" . $quocgia . "','" . $nam . "','" . $dienvien . "','" . $daodien . "','" . $banner . "','" . $noidung . "','" . $trangthai . "','" . $luotxem . "')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($banner_tmp,'upload/'.$banner);
        header('Location:../../index.php?action=quanlyPhim&query=lietke');
    } else{
        //display error messages
        echo $errors['TenPhim'];
    }
    
    // if($tenphim == null || $tenphim == ''){
    //     return false;
    // }
    //     $sql_them = "INSERT INTO phim(TenPhim,IdTheLoai,SoTap,SoTapDaChieu,ThoiLuong,NhaSanXuat,QuocGia,Nam,DienVien,DaoDien,Banner,NoiDung,TrangThai,LuotXem) VALUE('" . $tenphim . "','" . $idtheloai . "','" . $sotap . "','" . $sotapdachieu . "','" . $thoiluong . "','" . $nhasanxuat . "','" . $quocgia . "','" . $nam . "','" . $dienvien . "','" . $daodien . "','" . $banner . "','" . $noidung . "','" . $trangthai . "','" . $luotxem . "')";
    //     mysqli_query($mysqli, $sql_them);
    //     move_uploaded_file($banner_tmp,'upload/'.$banner);
    //     header('Location:../../index.php?action=quanlyPhim&query=lietke');
    

} elseif (isset($_POST['suaphim'])) {
    if($_FILES['Banner']['name']==''){
        $sql_update = "UPDATE  phim SET TenPhim ='".$tenphim. "' ,IdTheLoai ='".$idtheloai. "', SoTap='".$sotap. "',SoTapDaChieu ='".$sotapdachieu. "',ThoiLuong ='".$thoiluong. "', NhaSanXuat ='".$nhasanxuat. "',QuocGia ='".$quocgia. "',Nam ='".$nam. "',DienVien ='".$dienvien. "',DaoDien ='".$daodien. "',NoiDung ='".$noidung. "',TrangThai ='".$trangthai. "' WHERE IDPhim='" . $idphim . "'  ";
        mysqli_query($mysqli, $sql_update);
        echo 'fail';
        header('Location:../../index.php?action=quanlyPhim'); 
    }else{
        $sql_update = "UPDATE  phim SET TenPhim ='".$tenphim. "' ,IdTheLoai ='".$idtheloai. "', SoTap='".$sotap. "',SoTapDaChieu ='".$sotapdachieu. "',ThoiLuong ='".$thoiluong. "', NhaSanXuat ='".$nhasanxuat. "',QuocGia ='".$quocgia. "',Nam ='".$nam. "',DienVien ='".$dienvien. "',DaoDien ='".$daodien. "',NoiDung ='".$noidung. "',TrangThai ='".$trangthai. "',Banner ='".$banner. "' WHERE IDPhim='" . $idphim . "'  ";
        mysqli_query($mysqli, $sql_update);
        move_uploaded_file($banner_tmp,'upload/'.$banner);
        header('Location:../../index.php?action=quanlyPhim'); 
        echo 'sửa thành công';
    }
}
 else {
    $delID = $idphim;
    $sql_delete = "DELETE FROM phim  WHERE IdPhim ='".$delID."' ";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../index.php?action=quanlyPhim');
}
$mysqli -> close();
?>