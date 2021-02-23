<?php
include_once 'conectarBD.php';

$cmd = $pdo->prepare('SELECT id, id_status, descricao, codigo FROM tb_tarefas');
$cmd->execute();
return $resultado=$cmd->fetchAll(PDO::FETCH_OBJ);

                                             
?>
