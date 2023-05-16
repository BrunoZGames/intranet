<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'axiom';

$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
$con = new mysqli($server,$username,$password,$database);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

if (!$con) {
    die("<script>alert('Connection Failed.')</script>");
}

?>