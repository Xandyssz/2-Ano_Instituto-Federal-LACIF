<?php
$server = "localhost";
$db_username = "lacifs93_user";
$db_password = "87d95fwQ!243";
$database = "lacifs93_ifsp_lacif";
$connection = mysqli_connect($server, $db_username, $db_password, $database);
if (!$connection) {
    die("<script> alert('connection failed')</script>");
}