<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=jj, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d722573e0.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if (!isset($_SESSION["admin"]) and $_SERVER["REQUEST_URI"] !== "/dashboard/Ecommerce/admin/forms/login.php") {
    header("location:/dashboard/Ecommerce/admin/forms/login.php");
}
?>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white"><span class="fs-3">K</span> Store</a>
            <span class="text-white">
                <i class="fa-solid fa-user"></i>
                Hello, <?= $_SESSION["admin"] ?? ""; ?> |
                <a href="/dashboard/Ecommerce/admin/forms/logoutLogic.php" class="text-decoration-none text-white"><i
                        class="fa-solid fa-right-from-bracket"></i>Logout |</a>
                <a href="/dashboard/Ecommerce/user/" class="text-decoration-none text-white">Userpanel</a>
            </span>
        </div>
    </nav>

    <?php
    if (isset($_SESSION["admin"])) {
        echo <<<eot
     <div>
        <h2 class="text-center">Dashboard</h2>
    </div>
 <div class="bg-primary text-center col-6 m-auto">
  <a href="/dashboard/Ecommerce/admin/product/" class="text-white text-decoration-none px-5">Add Product</a>
 <a href="/dashboard/Ecommerce/admin/users.php" class="text-white text-decoration-none ">View Users</a>
 </div>
eot;
    }
    ?>
</body>

</html>