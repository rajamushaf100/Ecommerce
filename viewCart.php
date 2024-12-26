<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <?php
    include "header.php";
    if (isset($_SESSION["item"])) {
        unset($_SESSION["item"]);
        // print_r($_SESSION);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-light rounded mt-2 mb-5">
                <h1 class="text-primary text-center font-monospace">My Cart</h1>
            </div>
            <div class="container-fluid fs-5">
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-bordered text-center">
                            <thead>
                                <th>Serial No.</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                <?php
                                // session_start();
                                $total = 0;
                                if (isset($_SESSION['cart'])) {
                                    $p_total = 0;
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $p_total = $value['product_price'] * $value['product_quantity'];
                                        $total += $p_total;
                                        $key++;
                                        echo "
                                    <form action='insertToCart.php'>
                                    <tr>
                                <td>$key</td>
                                <td>
                                $value[product_name]</td>
                                <td>
                                $value[product_price]</td>
                                <td><input name=PQuantity type='number' style='border:none;' class='text-center' placeholder='Qauntity' value=$value[product_quantity] >
                                 <button name='refresh' style='border:none;background-color: transparent;' hidden><i class='fa-solid fa-arrows-rotate'></i></button>
                                </td>
                                <td>$p_total</td>
                                <td>
                     <button name='remove' style='border:none;background-color: transparent'><i class='fa-solid fa-trash-can'></i></button>
                      <input type='text' name='item_no' hidden value=$key>
                                 </tr>
                                 </form>"
                                        ;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3 text-center font-monospace">
                        <h3>Total</h3>
                        <h1 class="bg-primary text-white"><?= number_format($total, 2) ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const input = document.querySelectorAll("input[name='PQuantity']");
        input.forEach(ele => {
            ele.addEventListener("change", () => {
                ele.nextElementSibling.click();
            })
        })
    </script>
</body>

</html>