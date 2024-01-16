<?php

$host = 'localhost';
$dbname = 'datenbank';
$dbusername = 'root';
$dbpassword = '123';


try {
    $pdo= new PDO("mysql:host=$host;dbname=$dbname",$dbusername,
    echo($pdo)
    $dbpassword);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("Connection failed:". $e->getMessage());

}
?>