<?php
require("database.php");
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO phones (brand, model, price, quantity) VALUES ('$brand', '$model', '$price', '$quantity')";

if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Greska: " . mysqli_error($connection);
}
?>