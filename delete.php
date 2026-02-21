<?php
require("database.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($connection, "DELETE FROM phones WHERE id = $id");
}
header("Location: index.php");
exit();
?>