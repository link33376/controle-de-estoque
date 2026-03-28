<?php 
//usuario_crud.php

// Função para buscar todos os usuários do banco de dados
//PDO $conexao - Objeto de conexão com o banco de dados
//processo de dados 
function buscarUsuario(PDO $conexão)
{

// Define uma string contendo o comando SQL que será enviado ao banco de dados. 
//1 coisa a fazer para ter uma tabela de banco de dados aparecendo no navegador.//intup
// Seleciona as colunas id, nome e email da tabela 'usuarios' ordenando pela coluna 'nomes' 
$sql = "SELECT id,nome,email FROM usuarios ORDER BY nome";
//$stmt
//$queery

// O método prepare() organiza o SQL para ser enviado com segurança, 
 // criando um objeto de declaração (statement) na variável $consulta.
$consulta = $conexão->prepare($sql);

// O método execute() efetivamente envia o comando preparado para o servidor 
// de banco de dados para ser processado.
$consulta->execute();


// Retorna o resultado da consulta para quem chamou a função.
// retorna um array contendo todas os registros remanescentes no conjunto de resultados
//O array representa cada registro como um array de valores de coluna ou um objeto com propriedades correspondentes a cada nome de coluna.
// Um array vazio é retornado se não houver resultados na busca.
// input -> processamento -> output
return $consulta->fetchAll(PDO:: FETCH_ASSOC);
}


?>
