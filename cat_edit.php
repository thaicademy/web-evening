<?php
      include "navbar.php";
      include "connect.php";
      $cid = $_GET['cid'];
      $sql = "SELECT * FROM  tbl_category WHERE cid='$cid'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result)
    ?>
    <div class="container pt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">แก้ไขประเภทสินค้า</h2>
                <form action="cat_update.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">ประเภทสินค้า</div>
                        <div class="col-md-9">
                            <input type="hidden" name="cid" class="form-control"
                                value="<?php echo $row['cid']; ?>" />
                            <input type="text" name="cname" class="form-control"
                                value="<?php echo $row['cname']; ?>" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">แนบไฟล์</div>
                        <div class="col-md-9">
                            <input type="file" name="cimg" class="form-control"
                                value="<?php echo $row['cimg']; ?>" />
                        </div>
                    </div>
                    <div class="d-grid pt-2">
                        <input type="submit" value="แก้ไข" class="btn btn-warning" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
      include "footer.php";
    ?>