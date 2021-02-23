<?php
include_once 'conectarBD.php';

$codigo = $_POST["codigo"];
$descricao = $_POST["descricao"];

$res = $pdo->prepare("INSERT INTO `$database`.`tb_tarefas` (`codigo`, `descricao`) VALUES (:codigo, :descricao)");
$res->bindValue(":codigo",$codigo);
$res->bindValue(":descricao",$descricao);
$res->execute();
header('Location: ../index.php');
                                             
?>
