<?php 

if(!$_SESSION['id'])
{
    include "".$_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
    header("location: ".$homedir."/logout.php");
}

?>