<?php

class Database {
public $pdo;

public function __constuct($db = "test", $user="root", $pwd="", $host="localhost:3306") {
    try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        $this->pdo->setAttribute(PDO::ATTR_ARRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection to database $db";
    } catch(PDOExeception $e) {
        echo "Connection Failed: " . $e->getMessage();

    }
    }
}
$database1 = new Database();
?>