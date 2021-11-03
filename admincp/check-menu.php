<?php
if($menu_admin != 1)
{
    include '../lib/config.php';
    header("location: ".$homedir."/admincp/index.php");
}
?>