<?php
       include "navbar.php";
?>

<div class="container pt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="check_login.php" method="POST">
                Username or Email:
                <input type="text" name="username" class="form-control" />
                Password:
                <input type="password" name="password" class="form-control" />
                <div class="d-grid pt-2">
                    <input type="submit" value="LOGIN" class="btn btn-success" />
                </div>
            </form>

            <a href="./forgotpassword.php"> Forgot password? </a>
            <br />
            New member? <a href="./register.php"> Create an account. </a>
            
        </div>
    </div>
</div>
<?php
      include "footer.php"
?>