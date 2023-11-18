

<!-- https://getbootstrap.com/docs/4.0/components/forms/#validation -->
<?php
$sql_lietke_danhmuc = "SELECT * FROM theloai ORDER BY IDTheLoai ASC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);

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
                    <form method="POST" name="ThemPhim" action="modules/quanlyPhim/xuli.php" enctype="multipart/form-data" class="row g-3 needs-validation" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group has-validation">
                                                <tr>
                                                    <div class="form-group mb-3">
                                                        <td style="text-align:center;">
                                                            <label class="form-label"><strong>Tên Phim</strong></label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" placeholder="Nhập tên phim" id="TenPhim" name="TenPhim" required>
                                                            <div class="invalid-feedback">
                                                                Bạn chưa nhập tên phim.
                                                            </div>
                                                        </td>
                                                    </div> 
                                                </tr>

                                                <tr>
                                                
                                                    <td style="text-align:center;">
                                                        <label class="form-label"><strong>Thể loại</strong></label>
                                                    </td>
                                                    <td style="text-align:center;">
                                                        <select class="form-select" type="text" name="TenTheLoai" required aria-label="select example">
                                                        <?php
                                                            $i = 0;
                                                            while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                                                                $i++;
                                                            ?>
                                                            <option value='<?php echo $row["TenTheLoai"] ?>'><?php echo $row["TenTheLoai"] ?></option>
                                                            <?php }
                                                            ?>
                                                        </select>
                                                        
                                                    </td>
                                                </tr>

                                                <tr>
                                                
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Số tập</strong></label>
                                                </td>
                                                <td>
                                                    
                                                    <input class="form-control" placeholder="Nhập số tập" type="text" name="SoTap" />
                                                </td>
                                                
                                            </tr>

                                            <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Số tập Đã chiếu</strong></label></td>
                                                    <td><input class="form-control" placeholder="Nhập số tập đã chiếu" type="text" name="SoTapDaChieu"/></td>
                                                </tr>
                                        
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Thời lượng</strong></label></td>
                                                    <td><input class="form-control" placeholder="00:00:00" type="text" name="ThoiLuong"/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Nhà sản xuất</strong></label></td>
                                                    <td><input class="form-control" placeholder="Nhập tên nhà sản xuất" type="text" name="NhaSanXuat"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Quốc gia</strong></label></td>
                                                    <td><input class="form-control" placeholder="Nhập tên quốc gia" type="text" name="QuocGia"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Năm</strong></label></td>
                                                    <td><input class="form-control" placeholder="2xxx" type="text" name="Nam"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Diễn viên</strong></label></td>
                                                    <td><input class="form-control" placeholder="Nguyễn Văn A" type="text" name="DienVien"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Đạo diễn</strong></label></td>
                                                    <td><input class="form-control" placeholder="Nguyễn Văn B" type="text" name="DaoDien"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Banner Img</strong></label></td>
                                                    <td><input class="form-control" type="file" name="Banner"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label for="validationTextarea" class="form-label"><strong>Nội dung</strong></label></textarea></td>
                                                    <td>
                                                        <textarea class="form-control" id="validationTextarea" placeholder="Nhập nội dung" rows="5" name="NoiDung" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a message in the textarea.
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;"><label class="form-label"><strong>Trạng Thái</strong></label></td>
                                                    <td>
                                                        <SELECT class="form-select" name="TrangThai" required>
                                                            <option value="1">Kich Hoạt</option>
                                                            <option value="0">Ẩn</option>
                                                        </SELECT>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <div class="form-group mb-3">
                                                        <td></td>
                                                        <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="themphim"value="Add" style="font: size 30px;">Thêm</button></td>
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



<script>
        // Kiểm tra dữ liệu nhập vào
        function validateForm() {
        var x = document.forms.ThemPhim.TenPhim.value;
        if (x == "" || x == null) { 
            // Chuyển class của input thành is-invalid
            document.getElementById("TenPhim").className = "form-control is-invalid";
            return false;
        }
    }
</script>