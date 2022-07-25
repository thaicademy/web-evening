    <?php
      include "navbar.php";
    ?>
    <div class="container pt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">สมัครสมาชิก</h2>
                <form action="reg_insert.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">Username</div>
                        <div class="col-md-9">
                            <input type="text" name="username" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Email</div>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Password</div>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Confirm Password</div>
                        <div class="col-md-9">
                            <input type="password" name="confirm_password" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Firstname</div>
                        <div class="col-md-9">
                            <input type="text" name="firstname" class="form-control" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3">Lastname</div>
                        <div class="col-md-9">
                            <input type="text" name="lastname" class="form-control" />
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
      include "footer.php";
    ?>