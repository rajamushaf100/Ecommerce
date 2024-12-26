<?php
$a_username = $_POST["Username"];
$a_password = $_POST["Password"];
include "../product/dbConfig.php";
$result_set = $conn->query("SELECT * FROM `admin_table` WHERE username = '$a_username' AND userpassword = '$a_password'");
session_start();
if ($result_set->num_rows) {
    $_SESSION["admin"] = $a_username;
    echo "
    <script>
    alert('Login Successful');
    window.location.href = '../mystore.php';
    </script>
    ";
} else {
    echo "
     <script>
     alert('Invalid Credientials');
     window.location.href = 'login.php';
     </script>
     ";
}