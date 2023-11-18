<?php
$sql_lietke_danhmuc = "SELECT * FROM theloai ORDER BY IDTheLoai ASC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);
$sql_sua_phim = "SELECT * FROM phim inner join theloai on phim.IdTheLoai = theloai.IdTheLoai AND IdPhim = $_GET[IDPhim] ";
$query_sua_phim = mysqli_query($mysqli, $sql_sua_phim);

?>
<div class="container-fluid">
<div class="card shadow mb-3">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Thêm phim</p>
    </div>
    <div class="card-body">
        <!-- Điền ở đây -->
        <!-- Table -->
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                    <table id="dataTable" class="table my-0" width="30% !important">
                    <form method="POST" name="SuaPhim" action="modules/quanlyPhim/xuli.php?IDPhim=<?php echo $_GET['IDPhim']?>" enctype="multipart/form-data"class="row g-3 needs-validation" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group has-validation">
                                                <?php
                                                //giải thích: lấy mã phim từ url, rồi lấy thông tin phim từ mã phim đó
                                                    while ($fs = mysqli_fetch_array($query_sua_phim)) {
                                                ?>
                                                
                                                <tr>
                                                    <div class="form-group mb-3">
                                                        <!-- Nhập tên phim: label -->
                                                        <td style="text-align:center;">
                                                            <label class="form-label"><strong>Tên Phim</strong></label>
                                                        </td>
                                                        <!-- Nhập tên phim: input -->
                                                        <td>
                                                            <input class="form-control" type="text" value="<?php echo $fs['TenPhim'] ?>" id="TenPhim" name="TenPhim" required>
                                                            <div class="invalid-feedback">
                                                                Bạn chưa nhập tên phim.
                                                            </div>
                                                        </td>
                                                    </div> 
                                                </tr>

                       
                                                <tr>
                                                    <!-- Nhập thể loại: label -->
                                                    <td style="text-align:center;">
                                                        <label class="form-label"><strong>Thể loại</strong></label>
                                                    </td>
                                                    <!-- Nhập thể loại: input -->
                                                    <td style="text-align:center;">
                                                        <select class="form-select" type="text" name="TenTheLoai" required aria-label="select example">
                                                        <?php
                                                            $i = 0;
                                                            while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                                                                $i++;
                                                            ?>
                                                            <option value='<?php echo $row["TenTheLoai"] ?>'>
                                                                <?php if ($fs['TenTheLoai']==$row["TenTheLoai"]){echo 'selected';} ?>:
                                                                <?php echo $row["TenTheLoai"] ?>
                                                            </option>
                                                            <?php 
                                                                }
                                                            ?>
                                                        </select>
                                                        
                                                    </td>
                                                </tr>
                                            
                                                <tr>
                                                <!-- Nhập số tập: label -->
                                                    <td style="text-align:center;">
                                                        <label class="form-label"><strong>Số tập</strong></label>
                                                    </td>
                                                <!-- Nhập số tập: input -->
                                                    <td>
                                                        
                                                        <input class="form-control" type="text" name="SoTap" value="<?php echo $fs['SoTap'] ?>" required>
                                                    </td>
                                                
                                                </tr>

                                                <tr>
                                                    <!-- Nhập số tập đã chiếu: label -->
                                                    <td style="text-align:center;"><label class="form-label"><strong>Số tập Đã chiếu</strong></label></td>
                                                    <!-- Nhập số tập đã chiếu: input -->
                                                    <td><input class="form-control" value="<?php echo $fs['SoTapDaChieu'] ?>" type="text" name="SoTapDaChieu"/></td>
                                                </tr>
                                                <!--Thời lượng-->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Thời lượng</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['ThoiLuong'] ?>" type="text" name="ThoiLuong"/></td>
                                                </tr>
                                                
                                                <!-- Nhà sản xuất -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Nhà sản xuất</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['NhaSanXuat'] ?>" type="text" name="NhaSanXuat"/></td>
                                                </tr>
                                                <!-- Quốc gia -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Quốc gia</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['QuocGia'] ?>" type="text" name="QuocGia"/></td>
                                                </tr>
                                                <!-- Năm -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Năm</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['Nam'] ?>" type="text" name="Nam"/></td>
                                                </tr>
                                                <!-- Diễn viên -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Diễn viên</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['DienVien'] ?>" type="text" name="DienVien"/></td>
                                                </tr>
                                                <!-- Đạo diễn -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Đạo diễn</strong></label></td>
                                                    <td><input class="form-control" value="<?php echo $fs['DaoDien'] ?>" type="text" name="DaoDien"/></td>
                                                </tr>
                                                <!-- Banner Img -->
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Banner Img</strong></label></td>
                                                    <td><img src="modules\quanlyPhim\upload\<?php $fs['Banner']?>"><input class="form-control" type="file" name="Banner"></td>
                                                </tr>
                                                <!-- Nội dung -->
                                                <tr>
                                                    <td style="text-align:center;"><label for="validationTextarea" class="form-label"><strong>Nội dung</strong></label></td>
                                                    <td>
                                                        <textarea class="form-control" id="validationTextarea" name="NoiDung" required><?php echo $fs['NoiDung'] ?></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a message in the textarea.
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Trạng Thái</strong></label></td>
                                                    <td>
                                                        <SELECT class="form-select" name="TrangThai">
                                                            <option value="1" <?php if($fs['TrangThai']==1){echo 'selected';}?> >Kich Hoạt</option>
                                                            <option value="0" <?php if($fs['TrangThai']==0){echo 'selected';}?> >Ẩn</option>
                                                        </SELECT>
                                                    </td>
                                                </tr>
                                                <?php 
                                                    } 
                                                ?>
                                                <tr>
                                                    <div class="form-group mb-3">
                                                        <td></td>
                                                        <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="suaphim" value="Add" style="font: size 30px;">Sửa</button></td>
                                                    </div>
                                                </tr>

                                            </div>
                                        </div>
                                    </div>
                                </div>                
                        </form>
                    </table>
        </div>
    </div>
</div>
</div>

