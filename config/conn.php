<?php 
$host = "localhost";
$user = "root";  
$pass = "admin";
$bd = "PraticandoPHP";

$conn= new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

