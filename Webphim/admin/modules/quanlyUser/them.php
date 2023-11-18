<?php
   
    // Truy vấn và thêm user vào database
    // $sql_them_user = "SELECT * FROM useraccount ORDER BY UserID DESC";
    // $query_them_user = mysqli_query($mysqli, $sql_them_user);
    // $row = mysqli_fetch_array($query_them_user);
    
?>
<!-- <p>Them User</p> -->


<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Thêm User</p>
        </div>
        <div class="card-body">
            <!-- Điền ở đây -->
            <!-- Table -->
            <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <form method="POST" action="modules/quanlyUser/xuli.php?query=them" class="row g-3 needs-validation" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group has-validation">
                                
                                        <tr>
                                    
                                            <div class="form-group mb-3">
                                                <!-- Nhập tên Thể loại: label -->
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Username</strong></label>
                                                </td>
                                                <!-- Nhập tên Thể loại: input -->
                                                <td>
                                                    <input class="form-control" placeholder="Vui lòng nhập Username" type="text" name="Username" required>
                                                    <div class="invalid-feedback">
                                                        Bạn chưa nhập User.
                                                    </div>
                                                </td>
                                            </div> 
                                        </tr> 
                                        <tr>
                                            <div class="form-group mb-3">
                                                <!-- Nhập tên Thể loại: label -->
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Password</strong></label>
                                                </td>
                                                <!-- Nhập tên Thể loại: input -->
                                                <td>
                                                    <input class="form-control" placeholder="88888888" type="text"  name="Password" required>
                                                    <div class="invalid-feedback">
                                                        Bạn chưa nhập Mật khẩu.
                                                    </div>
                                                </td>
                                            </div> 
                                        </tr> 
                                        <tr>
                                            <div class="form-group mb-3">
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Họ và tên</strong></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" placeholder="Nguyễn Văn A" type="text"  name="Hoten">
                                                </td>
                                            </div> 
                                        </tr> 
                                        <tr>
                                            <div class="form-group mb-3">
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Mail</strong></label>
                                                </td>
                                                <td>
                                                    <input class="form-control" placeholder="name@gmail.com" type="text" name="Mail">
                                                </td>
                                            </div> 
                                        </tr> 
                                        <tr>
                                            <div class="form-group mb-3">
                                                <td style="text-align:center;">
                                                    <label class="form-label"><strong>Ngày sinh</strong></label>
                                                </td>
                                                <td>
                                                    <input type="date" class="form-control" placeholder="YYYY-MM-DD"  name="NgaySinh"   min="1900-01-01" max="2023-4-1">
                                                </td>
                                            </div> 
                                        </tr> 
                                                                                            
                                        <tr>
                                            <div class="form-group mb-3">
                                                <td></td>
                                                <!-- sửa id the loại trong database -->
                                                <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="themuser">Them</button></td>
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