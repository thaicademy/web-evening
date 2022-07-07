<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/bootstrap.js"></script>
</head>

<body>
   <?php
      include "navbar.php";
   ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="./images/pic1.jpg" class="img-fluid" />
            </div>
            <div class="col-md-10">
                For example, here are two grid layouts that apply to every device and viewport, from xs to xxl. Add any
                number of unit-less classes for each breakpoint you need and every column will be the same width.
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                For example, here are two grid layouts that apply to every device and viewport, from xs to xxl. Add any
                number of unit-less classes for each breakpoint you need and every column will be the same width.
            </div>
            <div class="col-md-8">
                <img src="./images/pic2.jpg" class="img-fluid" />
            </div>
            <div class="col-md-2">
                <img src="./images/pic3.jpg" class="img-fluid" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="./images/pic3.jpg" class="img-thumbnail float-start" />
            </div>
            <div class="col-md-6">
                <img src="./images/pic4.jpg" class="img-thumbnail float-end" />
            </div>
        </div>
    </div>
</body>

</html>