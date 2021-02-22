<?php

$servername = "";
$database = ""; 
$username = "";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object


try { 
$pdo = new PDO($sql, $username, $password, $dsn_Options);
echo "Conectado com sucesso"."<br />";


} catch (PDOException $error) {
echo 'Erro de conexão: ' . $error->getMessage();
}

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