<?php

include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
session_start();
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql_select = "SELECT * FROM boss WHERE username='$username' AND password='$password'";
	//$sql_select = "SELECT * FROM boss WHERE username='$username'";
    if(mysqli_num_rows(mysqli_query($conn,$sql_select)) == 0)
    {
        echo "<script>alert('Sai tài khoản hoặc mật khẩu !'); top.location.href='".$homedir."/admincp/logout.php'; </script>";
    }
    else
    {
        $_SESSION['admincp'] = "ok";
        $_SESSION['admin-username'] = $username;
        header("location: ".$homedir."/admincp/admin.php?type=check_token");
    }

}
else
{
    header("location: ".$homedir."/admincp/logout.php");
}

?>