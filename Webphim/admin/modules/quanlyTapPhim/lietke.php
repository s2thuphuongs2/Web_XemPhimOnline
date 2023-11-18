<!-- <p>Danh sach Tap phim</p> -->
<?php   
$idphim =$_GET['IDPhim'];
$sql_lietke_taphim='SELECT * from tapphim inner join (select IDPhim, TenPhim from phim)x ON tapphim.IDPhim = x.IDPhim AND tapphim.IDPhim="'.$idphim.'"' ;
$query_lietke_tapphim = mysqli_query($mysqli, $sql_lietke_taphim);

?>



<div class="container-fluid">
<a style="text-decoration:none" href="index.php?action=quanlyTapPhim&query=them&IDPhim=<?php echo $idphim?>">
    <button class="btn btn-primary btn-sm">
        Thêm tập
    </button>
</a>
<br>
<br>
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Danh sách Tập phim</p>
    </div>
    <div class="card-body">
  
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Tập</th>
                    <th>Source phim</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        $i = 0;
        while ($rowx = mysqli_fetch_array($query_lietke_tapphim)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $rowx['IDTapPhim'] ?></td>
                <td><?php echo $rowx['TenPhim'] ?></td>
                <td><?php echo $rowx['TapSo'] ?></td>
                <td><?php echo $rowx['SourcePhim'] ?></td>         
    
                                            
                <td>
                        <a style="text-decoration:none"  href="modules/quanlyTapPhim/xuli.php?IDPhim=<?php echo $rowx['IDPhim'] ?>&IDTapPhim=<?php echo $rowx['IDTapPhim'] ?>">
                                <button class="btn btn-primary btn-sm">
                                    Xóa
                                </button>
                            </a> | <a  style="text-decoration:none" href="index.php?action=quanlyTapPhim&query=sua&IDPhim=<?php echo $rowx['IDPhim']  ?>&IDTapPhim=<?php echo $rowx['IDTapPhim'] ?>">
                            <button class="btn btn-primary btn-sm" >
                                    Sửa
                                </button>
                        </a>
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
                        <th>Tập</th>
                        <th>Source phim</th>
                        <th>Action</th>
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

