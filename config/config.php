<?php
#Caminhos absolutos
$dirInt="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de Dados
define('HOST','localhost:3307');
define('DB','ifsp_lacif');
define('USER','root');
define('PASS','87d95fwq');

#Incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');