<?php
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CP - Hệ Thống Quản Trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $homedir; ?>/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $homedir; ?>/css/style.css" />
    <script src='<?php echo $homedir; ?>/js/jquery-3.3.1.min.js'></script>
<link rel="icon" href="<?php echo $icon ?>">
</head>
<body>
    <div class="body-text">
    <div class="nav-head nav">
            <div class="logo">
                <h1> <?php echo $logo_text ?> </h1>
            </div>
</div>
        <div class="notice">
            <strong>Đây là hệ thống quản trị của admin</strong>
        </div>
        <div class="content">
            <h2>Admin Control Panel</h2>
            <div class="login">
            <p style='font-weight : 600;text-align : center'>Hãy đăng nhập bằng tài khoản admin</p>
                <div class="tool">
                   <form action="<?php echo $homedir; ?>/admincp/login.php" method="POST">
                    <input name='username' required type='text' placeholder='Tài khoản - Username'> 
                </input>
                <input name='password' autocomplete='off'  required type='password' placeholder='Password'> 
                </input>
                      <button name='login' type='submit' class='btn btn-get submit'> Đăng Nhập</button>
                   </form>
                </div>

                </div>
            </div>
        </div>

    
  <?php include '../footer.php' ?>