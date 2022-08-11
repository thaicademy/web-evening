<?php
include "connect.php";
$sql = "SELECT * FROM tbl_products";
$result = mysqli_query($conn, $sql);
?>

<div class="row row-cols-1 row-cols-md-4 g-4">
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
  <div class="col">
    <div class="card">
      <img src="./images/<?php echo $row[img] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row[name] ?></h5>
        <p class="card-text"> <?php echo $row[description] ?> </p>
      </div>
    </div>
  </div>

<?php }  ?>
</div>