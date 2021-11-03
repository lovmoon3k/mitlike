<?php
session_start();
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
if(isset($_SESSION['admincp']))
{
    if($_SESSION['admincp'] != "ok")
    {
        header("location: ".$homedir."/admincp/logout.php");
    }
}
else
{
    header("location: ".$homedir."/admincp/logout.php");
}
 if(isset($_SESSION['admin-username']))
    {
        
$a_username = $_SESSION['admin-username'];
$query_admin = "SELECT * FROM boss WHERE username='$a_username'";
        $menu_admin = 2;
        $data_admin = mysqli_fetch_array(mysqli_query($conn,$query_admin));
        if($_SESSION['admin-username'] == $admin_username || $data_admin['permission'] == 1) $menu_admin = 1 ;
        else $menu_admin = 2;
        if(mysqli_num_rows(mysqli_query($conn,$query_admin)) == 0) header("location: ".$homedir."/admincp/logout.php");
    }

?>