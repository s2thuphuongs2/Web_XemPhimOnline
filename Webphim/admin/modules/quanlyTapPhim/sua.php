<?php
$idphim = $_GET["IDPhim"];
$idtapphim = $_GET['IDTapPhim'];

$sql_sua_tapphim='SELECT * from tapphim inner join (select IDPhim, TenPhim from phim)x ON tapphim.IDPhim = x.IDPhim AND tapphim.IDPhim="'.$idphim.'"AND tapphim.IDTapPhim= "'.$idtapphim.'"' ;
$query_sua_tapphim = mysqli_query($mysqli, $sql_sua_tapphim);
$row = mysqli_fetch_array($query_sua_tapphim)


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
            <form method="POST" action="modules/quanlyTapPhim/xuli.php?IDPhim=<?php echo $idphim ?>&IDTapPhim=<?php echo $idtapphim ?>" class="row g-3 needs-validation" onsubmit="return validateForm()">
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
            
                            <div class="form-group mb-3">
                                <td style="text-align:center;">
                                    <label class="form-label"><strong>ID Tap</strong></label>
                                </td>
                                <td>
                                    <?php echo $row['IDTapPhim']?>
                                </td>
                            </div> 
                        </tr>
                        <tr>
                        
                            <td style="text-align:center;">
                                <label class="form-label"><strong>Tập</strong></label>
                            </td>
                            <td style="text-align:center;">
                                <input class="form-control" placeholder="Nhập số tập" type="text" value=<?php echo $row['TapSo'] ?> name="SoTap" />
                            </td>
                        </tr>

                        <tr>

                            
                            <input class="form-control" placeholder="Nhập số tập" type="text" name="SoTap" />
                        </td>
                        
                    </tr>

                    <tr>
                            <td style="text-align:center;"><label class="form-label"><strong>Source Phim</strong></label></td>
                            <td><input class="form-control" placeholder="//"  value="<?php echo $row['SourcePhim'] ?>" type="text" name="SourcePhim"/></td>
                    </tr>
                
                       
                        <tr>
                            <div class="form-group mb-3">
                                <td></td>
                                <td><button class="btn btn-primary btn-sm" type="submit" onclick="validateForm()" name="suatapphim" value="Add">Sửa</button></td>
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



