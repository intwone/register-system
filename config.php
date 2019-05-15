<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpassword = "";   
$charset = "utf8";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
    
} catch(PDOexception $e) {
    echo "Conection failure: ".$e->getMessage();
}

?>