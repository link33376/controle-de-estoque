<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "estoque";
    // conexão com banco de dados
try {
//tentativa de conexão com banco de dados
//codigo...
//conexão com o banco de dados
// classe  PDO é usanda acessar varios tipos de banco de dados, nesse caso mysql
/*DSN DATA SOURCE NAME, é a string de conexão, onde se passa o tipo do banco de dados, o host e o nome do banco de dados*/

    $conexao = new PDO("mysql:host=$servidor; dbname=$banco", $usuario,$senha);

     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "Conexao com o banco de dados estabelecida com sucesso!";

     
    } catch (\Throwable $erro){
        //lançavel serve para qualquer tipo de erro ou concessão
        //captura de erro caso a conexão falhe
        die("erro ao conectar com o banco de dados: " . $erro->getMessage());
        

    }

    
    
    ?>
</body>
</html>