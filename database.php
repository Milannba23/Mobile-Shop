<?php
$host = "localhost"; 
$user = "root";      
$password = "";          
$database = "mobile_shop"; 

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Konekcija nije uspela: " . mysqli_connect_error());
}
?>