<?php 

$porta = "localhost";
$user = "root";
$password = "";
$banco = "biblioteca";


$conn = mysqli_connect($porta, $user, $password, $banco) or
die("Error: ".mysqli_connect_error());

   

?>