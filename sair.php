<?php
session_start();
session_destroy();
header("location: lacif_index.php");
?>