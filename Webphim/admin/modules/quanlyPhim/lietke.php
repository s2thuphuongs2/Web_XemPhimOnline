<!-- <p>Danh sach phim</p> -->
<?php
$sql_lietke_phim = "SELECT * FROM phim inner join theloai on phim.IdTheLoai = theloai.IdTheLoai ORDER BY IDPhim ASC";
$query_lietke_phim = mysqli_query($mysqli, $sql_lietke_phim);

if (!$query_lietke_phim) {
    die('Error: ' . mysqli_error($mysqli));
}

?>

 


<div class="container-fluid">
       <!-- <a href="index.php?action=quanlyPhim&query=them">Thêm phim</a> -->
    <a style="text-decoration:none" href="index.php?action=quanlyPhim&query=them">
        <button class="btn btn-primary btn-sm">
            Thêm phim
        </button>
    </a>
    <br><br>
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Danh sách phim</p>
    </div>
    <div class="card-body">
        <!-- <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show <select class="d-inline-block form-select form-select-sm">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></label></div>
            </div>
            <div class="col-md-6">
                <div id="dataTable_filter" class="text-md-end dataTables_filter"><label class="form-label"><input class="form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" /></label></div>
            </div>
        </div>-->
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0" style="min-width: 2000px !important;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Phim</th>
                        <th>Baner</th>
                        <th>Thể Loại</th>
                        <th>Số Tập</th>
                        <th>Số tập đã chiếu</th>
                        <th>Thời lượng</th>
                        <th>Lượt xem</th>
                        <th>Nhà sản xuất</th>
                        <th>Quốc Gia</th>
                        <th>Năm</th>
                        <th>Diễn viên</th>
                        <th>Đạo diễn</th>
                        
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_phim)) {
                    //        Fatal error: Uncaught TypeError: mysqli_fetch_array(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\admin\modules\quanlyPhim\lietke.php:32
                    //Fix: https://stackoverflow.com/questions/6348412/why-does-mysqli-fetch-array-return-false-when-query-succeeds
                        $i++;
  
                    ?>
                        <tr>
                            
                            <td><?php echo $row['IDPhim'] ?></td>
                            <td>
                                <a style="text-decoration:none" href="modules/quanlyPhim/xuli.php?IDPhim=<?php echo $row['IDPhim']  ?>">
                                <button class="btn btn-primary btn-sm">
                                    Delete
                                </button>
                            </a> | <a  style="text-decoration:none" href="?action=quanlyPhim&query=sua&IDPhim=<?php echo $row['IDPhim']  ?>">
                            <button class="btn btn-primary btn-sm" >
                                    Sửa
                                </button>
                            </a>| <a  style="text-decoration:none" href="index.php?action=quanlyTapPhim&query=lietke&IDPhim=<?php echo $row['IDPhim']  ?>">
                            <button class="btn btn-primary btn-sm" >
                                    Tập phim
                                </button>
                            </a>
                            </td>
                            <td><?php echo $row['TenPhim'] ?></td>
                            <td><img width="70px" src="modules\quanlyPhim\upload\<?php echo $row['Banner'] ?>"></td>
                            <td><?php echo $row['TenTheLoai'] ?></td>
                            <td><?php echo $row['SoTap'] ?></td>
                            <td><?php echo $row['SoTapDaChieu'] ?></td>
                            <td><?php echo $row['ThoiLuong'] ?></td>
                            <td><?php echo $row['LuotXem'] ?></td>
                            <td><?php echo $row['NhaSanXuat'] ?></td>
                            <td><?php echo $row['QuocGia'] ?></td>
                            <td><?php echo $row['Nam'] ?></td>
                            <td><?php echo $row['DienVien'] ?></td>
                            <td><?php echo $row['DaoDien'] ?></td>

                            <td><?php echo $row['NoiDung'] ?></td>
                            <td>
                                <?php if($row['TrangThai'] == 1) {
                                    echo 'Kích hoạt';}
                                    else{echo 'Ẩn';}
                                ?>
                            </td>       
                            



                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên Phim</th>
                        <th>Baner</th>
                        <th>Thể Loại</th>
                        <th>Số Tập</th>
                        <th>Số tập đã chiếu</th>
                        <th>Thời lượng</th>
                        <th>Lượt xem</th>
                        <th>Nhà sản xuất</th>
                        <th>Quốc Gia</th>
                        <th>Năm</th>
                        <th>Diễn viên</th>
                        <th>Đạo diễn</th>
                        
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

