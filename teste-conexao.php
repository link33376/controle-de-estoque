<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

echo "<h2>Testando Conexão com Banco de Dados</h2>";
echo "<p><strong>Servidor:</strong> $servidor</p>";
echo "<p><strong>Usuário:</strong> $usuario</p>";
echo "<p><strong>Banco:</strong> $banco</p>";
echo "<hr>";

try {
    $conexao = new PDO("
    mysql:host=$servidor;
    dbname=$banco;
    charset=utf8", 
    $usuario, 
    $senha);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3 style='color: green;'>✓ Conexão bem-sucedida!</h3>";
    
    // Testando uma query simples
    $stmt = $conexao->query("SELECT VERSION() as versao");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p><strong>Versão MySQL:</strong> " . $resultado['versao'] . "</p>";
    
} catch (Throwable $erro) {
    echo "<h3 style='color: red;'>✗ Erro na conexão!</h3>";
    echo "<p><strong>Mensagem de erro:</strong></p>";
    echo "<pre style='background-color: #f0f0f0; padding: 10px; border: 1px solid red;'>";
    echo $erro->getMessage();
    echo "</pre>";
}
?>
