<?php
echo $id = $_GET["id"];
include "./product/dbConfig.php";
$val = $conn->query("DELETE FROM `user_table` WHERE Id = $id");
header("location:users.php");