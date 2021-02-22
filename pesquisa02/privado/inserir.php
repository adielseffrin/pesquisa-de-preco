<?php
$servername = "";
$database = ""; 
$username = "";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object

$codigo = $_POST["codigo"];
$descricao = $_POST["descricao"];

try { 
$pdo = new PDO($sql, $username, $password, $dsn_Options);
echo "Conectado com sucesso";


} catch (PDOException $error) {
echo 'Erro de conexão: ' . $error->getMessage();
}

$res = $pdo->prepare("INSERT INTO `supermercadoro04`.`tb_tarefas` (`codigo`, `descricao`) VALUES (:codigo, :descricao)");
$res->bindValue(":codigo",$codigo);
$res->bindValue(":descricao",$descricao);
$res->execute();
header('Location: ../pesquisapublica/index.php');
                                             
?>
