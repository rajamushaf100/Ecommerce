<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outerwear</title>
</head>

<body>
    <?php
    include "header.php"; ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <?php
                echo "<h1 class='text-center'>Outerwear</h1>";
                include "../admin/product/dbConfig.php";
                $result_set = $conn->query("SELECT * FROM `prod_table` Where PCategory = 'Outerwear' ");

                while ($row = $result_set->fetch_assoc()) {
                    echo <<<eot
                    <div class="col-md-6 col-lg-4 my-2">
                    <form action="insertTOCart.php" method="POST">
<div class="card m-auto text-center" style="width: 18rem;">
  <img src="../admin/product/$row[PImage]" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title fs-4 fw-bold">$row[PName]</h5>
    <p class="card-text fs-4 fw-bold">
eot; ?>
                    Rs:
                    <?php
                    echo number_format($row["PPrice"], 2);

                    echo <<<eot
</p>
    <input name=PName type=text hidden value='$row[PName]' />
    <input name=PPrice type=text hidden value='$row[PPrice]' />
    <input name=PId type=text hidden value=$row[Id] />
  <input name=PQuantity type="number" value="min='1' max='20'" placeholder="Qauntity"><br><br>
  <button type="submit" name=submit class="btn btn-primary w-100">Add To Cart</button>
  </div>
</div>
</form>
</div>
eot;
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>