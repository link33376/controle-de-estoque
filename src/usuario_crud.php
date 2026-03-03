<?php
//usuario_crud.php

function buscarUsuario(PDO $conexao)
{

$SQL = "c";

//$stmt
//$queery

$consulta = $conexao->prepare($SQL);
$consulta->execute();
return $consulta->fetch(PDO::FETCH_ASSOC);

} 