<!-- <p>Them phim</p> -->
<div class="container-fluid">
<div class="card shadow mb-4">
    <!-- giải thích: card shadow mb-4 là 1 card có độ bóng và khoảng cách từ card trên nó là 4 -->
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Thêm danh mục</p>
    </div>
    <div class="card-body">
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0" style="background: white;">
                <form method="POST" action="modules/quanlyDanhMuc/xuli.php">
                    <div class="row">
                        <div>
                            <tr>
                                <td>Tên Danh mục</td>
                                <td><input class="bg-light form-control border-0 small" type="text" name="tentheloai"> <input class="btn btn-primary btn-sm" type="submit" name="themdanhmuc" value="Add"></td>
                            </tr>
                        </div>
                    </div>
                </form>

            </table>
        </div>
    </div>
</div>
</div>
