<?php
#Caminhos absolutos
$dirInt="";
define('DIRPAGE',"https://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de Dados
define('HOST','localhost');
define('DB','ifsp_lacif');
define('USER','lacifs93_user');
define('PASS','87d95fwQ!243');

#Incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');