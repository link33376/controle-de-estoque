<?php
//camminhos absolutos corretos ao incluir arquivos 
define('BASE_PATH', __DIR__);

//garante URLS CORRETAS AO GERAR LINKS PARA AS PAGINAS 
define('BASE_URL', ''); 

/* Importe de script de conexão e disponibilizando
para todas as paginas que utilizam o config.php*/
require_once BASE_PATH . '/src/banco.php';