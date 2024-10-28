<?php
$host = "localhost";
$db = "kolokvijumi";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {//ako postoji neki connection kada se izvrsi conn
    exit("Neuspesna konekcija: greska> ".$conn->connection_error.", err kod>".$conn->connection_errno);

} 

?>