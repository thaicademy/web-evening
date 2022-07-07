<?php
   session_start();
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
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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
                        <li><a class="dropdown-item" href="#">อุปโภค</a></li>
                        <li><a class="dropdown-item" href="#">บริโภค</a></li>
                        <li><a class="dropdown-item" href="#">อิเล็กทรอนิกส์</a></li>
                        <li><a class="dropdown-item" href="#">เทคโนโลยี</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">สินค้ามือสอง</a></li>
                        <li><a class="dropdown-item" href="#">สินค้าราคาพิเศษ</a></li>
                    </ul>
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
                  if($_SESSION['user']){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php">Profile <?php echo "$_SESSION[name]";  ?> </a>
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