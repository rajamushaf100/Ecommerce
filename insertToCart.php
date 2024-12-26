<?php
session_start();
if (isset($_SESSION["user"])) {
    if (isset($_POST["submit"]) || isset($_SESSION["item"])) { //checking if the "submit" button was clicked or not?
        $product_name = $_POST["PName"] ?? $_SESSION["item"]["PName"];
        $product_price = $_POST["PPrice"] ?? $_SESSION["item"]["PPrice"];
        $product_quantity = $_POST["PQuantity"] ?? $_SESSION["item"]["PQuantity"] > 0 ? $_POST["PQuantity"] ?? $_SESSION["item"]["PQuantity"] : 1;
        $product_id = $_POST["PId"] ?? $_SESSION["item"]["PId"];
        $available_prods = [];
        echo $product_quantity;
        if (isset($_SESSION["cart"])) {
            $available_prods = array_column($_SESSION["cart"], "p_id");
        }
        if (in_array($product_id, $available_prods)) {
            echo "<script>
        alert('Product already added in the Cart');
        window.location.href='viewCart.php';
        </script>
        ";
        } else {
            $_SESSION["cart"][] = array("p_id" => $product_id, "product_name" => $product_name, "product_price" => $product_price, "product_quantity" => $product_quantity);

            header("location:viewCart.php");
        }
    }

    if (isset($_GET["remove"])) {
        unset($_SESSION["cart"][--$_GET["item_no"]]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
        header("location:viewCart.php");
    }

    if (isset($_GET["refresh"])) {
        $_SESSION["cart"][--$_GET["item_no"]]["product_quantity"] = $_GET["PQuantity"] > 0 ? $_GET["PQuantity"] : 1;
        header("location:viewCart.php");
    }
} else {
    if (isset($_POST["submit"])) {
        $_SESSION["item"] = $_POST;
    }
    header("location:forms/login.php");
}
