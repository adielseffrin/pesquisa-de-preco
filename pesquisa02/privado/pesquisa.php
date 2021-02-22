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

$pesquisa = $_POST["pesquisa"];
$enviar_pesquisa = $_POST["enviar_pesquisa"];
$nova_pesquisa = $_POST["nova_pesquisa"];

// Verifica se alguma cor foi selecionada

if(isset($_POST["enviar_pesquisa"])) {

if(isset($_POST["pesquisa"])) {

    //Faz um loop no Array de checkbox 

for($i = 0; $i < count($_POST["pesquisa"]); $i++) {
    echo $_POST["pesquisa"][$i]."<br />";
    echo [$i]."<br />";
    $cmd = $pdo->prepare('UPDATE tb_tarefas SET kunz = :e WHERE id_status = :id');
    $cmd->bindValue(":e", $_POST["pesquisa"][$i]);
    $cmd->bindValue(":id", "2");
    $cmd->execute();


}} else {

echo "Nenhum produto foi selecionado!";

}}else {

    $cmd = $pdo->prepare('UPDATE tb_tarefas SET id_status = :e WHERE id_status');
    
    $cmd->bindValue(":e","1");
    $cmd->execute();
    header('Location: ../pesquisapublica/index.php');

}
?>