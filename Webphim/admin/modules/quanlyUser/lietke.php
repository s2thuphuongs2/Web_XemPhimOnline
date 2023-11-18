
<?php
$sql_lietke_user = "SELECT * FROM useraccount ORDER BY UserID ASC";
$query_lietke_user = mysqli_query($mysqli, $sql_lietke_user);

?>
<div class="container-fluid">
    
    <a style="text-decoration:none" href="index.php?action=quanlyUser&query=them">
        <button class="btn btn-primary btn-sm">
            Thêm User
        </button>
    </a>
    <br><br>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Danh sách User</p>
        </div>
        <div class="card-body">
    
            <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Họ Tên</th>
                            <th>Gmail</th>
                            <th>Ngày Sinh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;

                            while ($row = mysqli_fetch_array($query_lietke_user)) {
                                $i++;
                        ?>
                            <tr>
                            <td><?php echo $row['UserID'] ?></td>
                            <td><?php echo $row['Username'] ?></td>
                            <td><?php echo $row['Password'] ?></td>
                            <td><?php echo $row['HoTen'] ?></td>
                            <td><?php echo $row['Mail'] ?></td>
                            <td><?php echo $row['NgaySinh'] ?></td>      
                                
                                <td>
                                    <a style="text-decoration:none" href="modules/quanlyUser/xuli.php?UserID=<?php echo $row['UserID']  ?>">
                                    <button class="btn btn-primary btn-sm">
                                        Xóa
                                    </button>
                                </a> | <a  style="text-decoration:none" href="?action=quanlyUser&query=sua&UserID=<?php echo $row['UserID']  ?>">
                                <button class="btn btn-primary btn-sm" >
                                        Sửa
                                    </button>
                                </a>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Họ Tên</th>
                            <th>Gmail</th>
                            <th>Ngày Sinh</th>
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