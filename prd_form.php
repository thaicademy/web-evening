<?php
include "navbar.php";
?>
<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">เพิ่มสินค้า</h2>
            <form action="prd_insert.php" method="POST" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-3">ชื่อสินค้า</div>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-3">รายละเอียด</div>
                    <div class="col-md-9">
                        <textarea rows="5" class="form-control" name="description"></textarea>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-3">ราคา</div>
                    <div class="col-md-9">
                        <input type="text" name="price" class="form-control" />
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-3">จำนวนในคลัง</div>
                    <div class="col-md-9">
                        <input type="text" name="stock" class="form-control" />
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-3">ประเภทสินค้า</div>
                    <div class="col-md-9">
                        <select name="category" class="form-control">
                            <?php
                             include "connect.php";
                             $sql = "SELECT * FROM tbl_category";
                             $result = mysqli_query($conn, $sql);
                             while($row = mysqli_fetch_assoc($result)) {
                               echo "<option value='$row[cname]'> $row[cname] </option>" ;
                             }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-3">แนบไฟล์</div>
                    <div class="col-md-9">
                        <input type="file" name="img" class="form-control" />
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