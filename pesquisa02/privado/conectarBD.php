<?php

$servername = "localhost";
$database = "pesquisa_mercado"; 
$username = "root";
$password = "password";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object

try { 
$pdo = new PDO($sql, $username, $password, $dsn_Options);
echo "Conectado com sucesso";


} catch (PDOException $error) {
echo 'Erro de conexão: ' . $error->getMessage();
}