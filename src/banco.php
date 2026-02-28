<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

//conexão com o banco de dados
try {
    //tentativa de conexão com o banco de dados
    //codigo...
    //clase PDO é usada para acessar varios tipos de banco de dados usando a mesma função  
    /*DSN DATA SOURCE NAME é a string de conexão usada para especificar o tipo de banco de dados, 
    o host e o nome do banco de dados*/ 
    $conexao = new PDO("
    mysql:host=$servidor;
    dbname=$banco;
    charset=utf8", 
    $usuario, 
    $senha);

    // habilitando laçamento de erro e exceção para o PDO
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";   
} catch (Throwable $erro) {
    //lançavel serve para qualquer tipo de erro ou exceção
    //captura de erro caso a conexão falhe  
    die("Erro na conexão: " . $erro->getMessage());
}