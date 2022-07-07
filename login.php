<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
       include "navbar.php";
     ?>

    <div class="container pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="check.php" method="POST">
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
                New member?<a href="./register.php"> Create an account. </a>

            </div>
        </div>
    </div>
    <?php
      include "footer.php"
    ?>

</body>

</html>