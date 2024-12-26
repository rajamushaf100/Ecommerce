<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d722573e0.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();
    $count = isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0;
    ?>
    <nav class="navbar border text-dark font-monospace px-2 ">
        <div class="container-fluid">
            <a class="navbar-brand"><span class="fs-2">K</span>Store</a>
            <span>
                <a href="/dashboard/Ecommerce/user/" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-house"></i> Home |
                </a>
                <a href="/dashboard/Ecommerce/user/viewCart.php" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-cart-shopping"></i> Cart(<?= $count ?>) |
                </a>

                <i class="fa-solid fa-user"></i>
                Hello, <?= $_SESSION["user"] ?? "" ?> |

                <?=
                    isset($_SESSION["user"]) ?
                    <<<eot
<a href="/dashboard/Ecommerce/user/forms/logoutLogic.php" class="text-decoration-none text-dark"><i class="fa-solid fa-right-from-bracket"></i> Logout |</a> 
eot :
                    <<<eot
                    <a href="/dashboard/Ecommerce/user/forms/login.php" class="text-decoration-none text-dark"><i
class="fa-solid fa-unlock-keyhole"></i> Login |</a>
eot;
                ?>

                <a href="/dashboard/Ecommerce/admin/mystore.php" class="text-decoration-none text-dark">Admin</a>
            </span>
        </div>
    </nav>
    <?php
    if ($_SERVER['PHP_SELF'] !== "/dashboard/Ecommerce/user/forms/login.php" and $_SERVER['PHP_SELF'] !== "/dashboard/Ecommerce/user/forms/register.php") {
        echo <<<eot
         <div class="bg-primary fs-4 font-monospace sticky-top">
        <ul class="list-unstyled d-flex justify-content-around align-items-center pt-1">
            <li><a class="text-decoration-none text-white" href="Outerwear.php">Outerwear</a></li>
            <li><a class="text-decoration-none text-white" href="SweatersandHoodies.php">Sweaters and Hoodies</a></li>
            <li><a class="text-decoration-none text-white" href="Accessories.php">Accessories</a></li>
        </ul>
    </div>
eot;
    }

    include "footer.php";
    ?>
</body>

</html>