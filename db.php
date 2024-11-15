<?php
$host = "localhost:3306";
$db = "winkel";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
    echo "Connected to database: $db <br>";
} catch (PDOException $error){
    die($error->getMessage());
}
?>