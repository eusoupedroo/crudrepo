<?php
include('./config.php'); 


if(isset($_POST['id'])){
    $id = $_POST['id'];

    try {
        $deleteQuery = $con->prepare("DELETE FROM users WHERE id = :id");
        $deleteQuery->bindParam(':id', $id, PDO::PARAM_INT);

        if ($deleteQuery->execute()) { echo "Dado deletado com sucesso"; } 
        else { echo "Erro ao deletar o dado. Entre em contato com o suporte."; }

    } catch (PDOException $e) { echo "Erro na execução da consulta: " . $e->getMessage(); }

} else { echo "ID não fornecido"; }


?>




