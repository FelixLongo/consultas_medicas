<?php
$host = "localhost";
$user = "root";
$password = ""; // senha vazia no XAMPP/Laragon
$dbname = "clinica";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
