<?php
$idphim = $_GET["IDPhim"];
$sql_them_tapphim='SELECT TenPhim from phim where IDPhim = "'.$idphim.'"' ;
$query_them_tapphim = mysqli_query($mysqli, $sql_them_tapphim);
$row = mysqli_fetch_array($query_them_tapphim)

?>

<div class="container-fluid">
<div class="row">
<div class="card shadow mb-3 col-sm-12 col-lg-6">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Thêm phim</p>
    </div>
    <div class="card-body">
        <!-- Điền ở đây -->
        <!-- Table -->
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0">
            <form method="POST" action="modules/quanlyTapPhim/xuli.php?IDPhim=<?php echo $idphim ?>" class="row g-3 needs-validation" onsubmit="return validateForm()">
                <div class="mb-3">
                <div class="row">
                <div class="col">
                    <div class="input-group has-validation">
                        <tr>
            
                            <div class="form-group mb-3">
                                <td style="text-align:center;">
                                    <label class="form-label"><strong>Phim</strong></label>
                                </td>
                                <td>
                                    <?php echo $row['TenPhim']?>
                                </td>
                            </div> 
                        </tr>

                        <tr>
                        
                            <td style="text-align:center;">
                                <label class="form-label"><strong>Tập</strong></label>
                            </td>
                            <td style="text-align:center;">
                                <input class="form-control" placeholder="Nhập số tập" type="text" name="SoTap" />
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
                            <td style="text-align:center;"><label class="form-label"><strong>Source Phim</strong></label></td>
                            <td><input class="form-control" placeholder="//" type="text" name="SourcePhim"/></td>
                    </tr>
                
                       
                        <tr>
                            <div class="form-group mb-3">
                                <td></td>
                                <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="themtapphim" value="Add">Thêm</button></td>
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
<div class="card shadow mb-3 col-sm-12 col-lg-6" style="padding:0px">
<!-- <img width="170px" src="modules\quanlyPhim\upload\<?php echo $row['Banner'] ?>" > -->
<img style="width:auto; max-height:500px; padding:10px" src="modules\quanlyPhim\upload\135099.jpg">
</div>


</div>
</div>
