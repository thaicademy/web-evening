<?php
include "navbar.php";
?>
    <div class="container pt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">เพิ่มประเภทสินค้า</h2>
                <form action="cat_insert.php" method="POST" enctype='multipart/form-data' >
                    <div class="row">
                        <div class="col-md-3">ชื่อประเภทสินค้า</div>
                        <div class="col-md-9">
                            <input type="text" name="cname" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">แนบไฟล์</div>
                        <div class="col-md-9">
                            <input type="file" name="cimg" class="form-control" />
                        </div>
                    </div>
                    <div class="d-grid pt-2">
                        <input type="submit" value="บันทึก" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php 
include"footer.php";
?>
