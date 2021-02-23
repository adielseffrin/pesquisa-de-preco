<?php
include_once 'conectarBD.php';

$checkbox = $_POST["checkbox"];
$selecao = $_POST["selecao"];
$nova_selecao = $_POST["nova_selecao"];


echo "<pre>";
    print_r($selecao);
    print_r($nova_selecao);
echo "</pre>";

if(isset($_POST["selecao"])) {

// Verifica se alguma cor foi selecionada

if(isset($_POST["checkbox"])) {

 //Faz um loop no Array de checkbox

for($i = 0; $i < count($_POST["checkbox"]); $i++) {
    echo $_POST["checkbox"][$i]."<br />";
    $cmd = $pdo->prepare('UPDATE tb_tarefas SET id_status = :e WHERE id = :id');
    $cmd->bindValue(":e","2");
    $cmd->bindValue(":id", $_POST["checkbox"][$i]);
    $cmd->execute();
    header('Location: ../pesquisapublica/pesquisa.php');

}} else {

    echo "Nenhum produto foi selecionado!";

}} else if(isset($_POST["nova_selecao"])){

        $cmd = $pdo->prepare('UPDATE tb_tarefas SET id_status = :e WHERE id_status');
        $cmd->bindValue(":e","1");
        $cmd->execute();
        header('Location: ../pesquisapublica/pesquisa.php');
    
}
?>