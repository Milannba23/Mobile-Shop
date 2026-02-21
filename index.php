<?php require("database.php"); ?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Mobile Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lager mobilnih telefona</h2>
    <table border="1">
        <tr>
            <th>ID</th><th>Brend</th><th>Model</th><th>Cena</th><th>Količina</th><th>Akcije</th>
        </tr>
        <?php
        $result = mysqli_query($connection, "SELECT * FROM phones");
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['brand']}</td>
                <td>{$row['model']}</td>
                <td>{$row['price']} €</td>
                <td>{$row['quantity']}</td>
                <td> 
                    <a href='update.php?id={$row['id']}'>Izmeni</a> | 
                    <a href='delete.php?id={$row['id']}'>Obriši</a> 
                </td>
            </tr>";
        } ?>
    </table>
    <h3>Dodaj novi telefon:</h3>
    <form action="insert.php" method="POST">
        <label>Brend:</label><input type="text" name="brand" required><br><br>
        <label>Model:</label><input type="text" name="model" required><br><br>
        <label>Cena:</label><input type="number" step="0.01" name="price" required><br><br>
        <label>Količina:</label><input type="number" name="quantity" required><br><br>
        <button type="submit" name="submit_insert">Sacuvaj u bazu</button>
    </form>
</body>
</html>