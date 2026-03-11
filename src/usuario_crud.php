<?php 
// usuario_crud.php

function buscarUsuario(PDO $conexao )
{
    $sql = "SELECT id, nome, email FROM usuarios ORDER BY nome";
    $consulta = $conexao->prepare($sql);
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);      
}

/**
 * Busca um usuário específico pelo ID
 */
function buscarUsuarioPorId(PDO $conexao, $id)
{
    $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':id', $id, PDO::PARAM_INT);
    $consulta->execute();
    
    return $consulta->fetch(PDO::FETCH_ASSOC); // Retorna um único usuário
}

/**
 * Exclui um usuário do banco de dados
 */
function excluirUsuario(PDO $conexao, $id)
{
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':id', $id, PDO::PARAM_INT);
    
    return $consulta->execute(); // Retorna true se excluiu com sucesso
}
?>