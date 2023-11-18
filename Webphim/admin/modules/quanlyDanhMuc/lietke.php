

<!-- Nhap
<p>Danh sach phim</p> -->
<?php
// giải thích: chọn tất cả các cột trong bảng theloai và sắp xếp theo IDTheLoai tăng dần
$sql_lietke_danhmuc = "SELECT * FROM theloai ORDER BY IDTheLoai ASC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);

?>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Danh sách phim</p>
    </div>
    <div class = "card-body">
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0" style="background: white;">
                <thead>
                    <!-- code gốc -->
                    <tr>
                        <th>ID</th>
                        <th>Tên Thể Loại</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    // giải thích: vòng lặp while sẽ lặp lại cho đến khi hết dữ liệu trong bảng theloai
                    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
                        $i++; 
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['IDTheLoai'] ?>
                            </td>
                            <!-- giải thích: $row['TenTheLoai'] sẽ lấy dữ liệu từ cột TenTheLoai trong bảng theloai -->
                            <td>
                                <?php echo $row['TenTheLoai'] ?>
                            </td>
                            <!-- giải thích: $row['IDTheLoai'] sẽ lấy dữ liệu từ cột IDTheLoai trong bảng theloai -->
                            <td>
                                
                            <a style="text-decoration:none" href="modules/quanlyDanhMuc/xuli.php?IDTheLoai=<?php echo $row['IDTheLoai']  ?>">
                                <button class="btn btn-primary btn-sm">
                                    Delete
                                </button>
                            </a> | <a  style="text-decoration:none" href="?action=quanlyDanhMuc&query=sua&IDTheLoai=<?php echo $row['IDTheLoai']  ?>">
                            <button class="btn btn-primary btn-sm" >
                                    Sửa
                                </button>
                            </a>
                               
                                
                                
                                
                                <!-- giải thích: đường dẫn sẽ trỏ đến IDTheLoai trong bảng theloai và sẽ xóa dữ liệu trong bảng theloai -->
                                <!-- giải thích: sử dụng query để truyền dữ liệu qua trang xuli.php -->
                                <!-- giải thích: sử dụng action để truyền dữ liệu qua trang lietke.php -->
                            </td>


                        </tr>

                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>

    </div>
</div>
</div>


