<?php
session_start();
session_destroy();
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
header("location: ".$homedir."/admincp/index.php");
?>