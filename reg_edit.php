    <?php
      include "navbar.php";
      include "connect.php";
      $id = $_GET['id'];
      $sql = "SELECT * FROM  tbl_users WHERE id='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result)
    ?>
    <div class="container pt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">แก้ไขสมาชิก</h2>
                <form action="reg_update.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">Username</div>
                        <div class="col-md-9">
                            <input type="hidden" name="id" class="form-control"
                                value="<?php echo $row['id']; ?>" />
                            <input type="text" name="username" class="form-control"
                                value="<?php echo $row['username']; ?>" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Email</div>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control"
                                value="<?php echo $row['email']; ?>" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Password</div>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control"
                                value="<?php echo $row['password']; ?>" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Firstname</div>
                        <div class="col-md-9">
                            <input type="text" name="firstname" class="form-control"
                                value="<?php echo $row['firstname']; ?>" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Lastname</div>
                        <div class="col-md-9">
                            <input type="text" name="lastname" class="form-control"
                                value="<?php echo $row['lastname']; ?>" />
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