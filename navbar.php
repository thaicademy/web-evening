<?php
   session_start();
   include "connect.php";
   $sql = "SELECT * FROM tbl_category";
   $result = mysqli_query($conn, $sql);

?>

<link rel="stylesheet" href="./css/bootstrap.css" />
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.js"></script>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Dindang1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">ติดต่อเรา</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ประเภทสินค้า
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <li><a class="dropdown-item"
                                href="cat_detail.php?cid=<?php echo"$row[cid]"; ?>"><?php echo"$row[cname]"; ?></a></li>
                        <?php
                     }
                   ?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="cat_form.php">เพิ่มประเภทสินค้า</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">สินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">วิธีการชำระเงิน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ตะกร้า</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                  if($_SESSION['username'] && $_SESSION['status']=="guest"){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php">Profile <?php echo "$_SESSION[username]";  ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Logout</a>
                </li>
                <?php
                 } else if($_SESSION['username'] && $_SESSION['status'] == "admin"){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./reg_select.php">แสดงสมาชิก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php">Profile <?php echo "$_SESSION[username]";  ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Logout</a>
                </li>
                <?php }else{  ?>
                <li class="nav-item">
                    <a class="nav-link" href="./register.php">สมัครสมาชิก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">เข้าสู่ระบบ</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>