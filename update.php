<?php
require("database.php");
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM phones WHERE id = $id");
$phone = mysqli_fetch_assoc($result);

if (isset($_POST['submit_update'])) {
    $brand = $_POST['brand']; $model = $_POST['model']; $price = $_POST['price']; $quantity = $_POST['quantity'];
    $sql_update = "UPDATE phones SET brand='$brand', model='$model', price='$price', quantity='$quantity' WHERE id = $id";
    if (mysqli_query($connection, $sql_update)) {
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <title>Izmena telefona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="brand" value="<?php echo $phone['brand']; ?>" required><br>
        <input type="text" name="model" value="<?php echo $phone['model']; ?>" required><br>
        <input type="number" step="0.01" name="price" value="<?php echo $phone['price']; ?>" required><br>
        <input type="number" name="quantity" value="<?php echo $phone['quantity']; ?>" required><br>
        <button type="submit" name="submit_update">Sačuvaj izmene</button>
    </form>
</body>
</html>