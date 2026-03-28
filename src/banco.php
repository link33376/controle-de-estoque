<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

try {

    $conexao = new PDO(
        "mysql:host=$servidor;dbname=$banco;charset=utf8",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // echo "Conexão realizada com sucesso!";

} catch (Throwable $erro) {

    die("Erro ao conectar com o banco de dados: " . $erro->getMessage());
}



