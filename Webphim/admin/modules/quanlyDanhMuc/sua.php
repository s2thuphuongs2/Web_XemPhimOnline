<!-- <p>Sửa danh mục</p> -->
<?php
$sql_sua_danhmuc = "SELECT * FROM theloai WHERE IDTheLoai = '$_GET[IDTheLoai]' LIMIT 1";
$query_sua_danhmuc = mysqli_query($mysqli, $sql_sua_danhmuc);
?>


<div class="container-fluid">
<div class="card shadow mb-3">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Sửa danh mục</p>
    </div>
    <div class="card-body">
        <!-- Điền ở đây -->
        <!-- Table -->
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0">
                <form method="POST" action="modules/quanlyDanhMuc/xuli.php?IDTheLoai=<?php echo $_GET['IDTheLoai'] ?>" enctype="multipart/form-data" class="row g-3 needs-validation" onsubmit="return validateForm()">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="input-group has-validation">
                                <?php
                                    while ($d = mysqli_fetch_array($query_sua_danhmuc)) {
                                ?>
                            
                                    <tr>
                                        <div class="form-group mb-3">
                                            <!-- Nhập tên Thể loại: label -->
                                            <td style="text-align:center;">
                                                <label class="form-label"><strong>ID Thể loại</strong></label>
                                            </td>
                                            <!-- Nhập tên Thể loại: input -->
                                            <td>
                                                <input class="form-control" placeholder="Chọn ID muốn sửa" type="text" value="<?php echo $d['IDTheLoai'] ?>" name="IDTheLoai" required>
                                                <div class="invalid-feedback">
                                                    Bạn chưa nhập ID Thể loại.
                                                </div>
                                            </td>
                                        </div> 
                                    </tr> 
                                    <tr>
                                        <div class="form-group mb-3">
                                            <!-- Nhập tên Thể loại: label -->
                                            <td style="text-align:center;">
                                                <label class="form-label"><strong>Tên Thể loại</strong></label>
                                            </td>
                                            <!-- Nhập tên Thể loại: input -->
                                            <td>
                                                <input class="form-control" placeholder="Sửa lại tên" type="text" value="<?php echo $d['TenTheLoai'] ?>" name="tentheloai" required>
                                                <div class="invalid-feedback">
                                                    Bạn chưa nhập Tên Thể loại.
                                                </div>
                                            </td>
                                        </div> 
                                    </tr> 

                                                
                                    <tr>
                                        <div class="form-group mb-3">
                                            <td></td>
                                            <!-- sửa id the loại trong database -->
                                            <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="suadanhmuc" value="Edit">Sửa</button></td>
                                        </div>
                                    </tr>
                                    <?php } ?>
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