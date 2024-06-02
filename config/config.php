<?php
#Caminhos absolutos
$dirInt="";
// ADICIONAR HTTP(S) | PARA HOST
// ADICIONAR HTTP | PARA LOCALHOST
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de Dados
define('HOST','localhost');
define('DB','ifsp_lacif');
define('USER','root');
define('PASS','#suasenha');

#Incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');