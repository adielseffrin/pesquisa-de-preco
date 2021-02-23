<?php
include_once 'conectarBD.php';

$pesquisa = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : array();
$enviar_pesquisa = isset($_POST["acao"]) &&  $_POST["acao"] == 'enviar';
$nova_pesquisa = isset($_POST["acao"]) &&  $_POST["acao"] == 'nova';
// Verifica se alguma cor foi selecionada
if($enviar_pesquisa) {
  if(count($pesquisa) > 0) {
  //Faz um loop no Array de checkbox 
    for($i = 0; $i < count($pesquisa['id']); $i++) {
      echo "Id BD: {$pesquisa['id'][$i]} <br/>";
      echo "Quantidade: {$pesquisa['quantidade'][$i]} <br />";
      echo $i."<br />";
      
      $cmd = $pdo->prepare('UPDATE tb_tarefas SET kunz = :e WHERE id_status = :id_status AND id = :id');
      $cmd->bindValue(":e", $pesquisa['quantidade'][$i]);
      $cmd->bindValue(":id", $pesquisa['id'][$i]);
      $cmd->bindValue(":id_status", "2");
      $cmd->execute();
    }
  } else {
    echo "Nenhum produto foi selecionado!";
  }
}else {

    $cmd = $pdo->prepare('UPDATE tb_tarefas SET id_status = :e WHERE id_status'); //por que esse WHERE não tem condição?
    
    $cmd->bindValue(":e","1");
    $cmd->execute();
    header('Location: ../index.php');

}
?>