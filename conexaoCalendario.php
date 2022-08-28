<?php

define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASS', '87d95fwq');
define('DBNAME', 'ifsp_lacif');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
