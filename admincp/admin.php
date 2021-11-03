<?php
include "".$_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include 'permission.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CP - Hệ Thống Quản Trị <?php echo $logo_text ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $homedir; ?>/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $homedir; ?>/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $homedir; ?>/admincp/style-admin.css" />
    <script src='/js/jquery-3.3.1.min.js'></script>
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
            <strong>Admin Control Panel <?php echo $boss ;?> </strong>
        </div> 
       <div class="content-admin">
            <div class="admin-sidebar">
                <ul>
                   <!-- menu admin -->
                   <!-- menu mod -->
                   <?php 
                   if($menu_admin)
                   {
                       if($menu_admin == 1) include 'menu-admin.php';
                       else include 'menu-mod.php';
                   }
                   ?>
                </ul>
            </div>
            <div class="admin-show">
                <!-- Check token -->
                 <!-- Show token  -->
                <!-- Delete token  -->
                <!-- Add token  -->
                <!-- Change password  -->
                <!-- Add admin -->
                <!-- delete admin -->
                <?php 
                    if(isset($_GET['type']))
                    {
                        $typeset = $_GET['type'];
                        if($typeset == "check_token") include 'check-token.php';
                        else if($typeset == "show_token") include 'show-token.php';
                        else if($typeset == "show_tokenid") include 'show-tokenid.php';
                        else if($typeset == "delete_token") include 'delete-token.php';
                        else if($typeset == "add_token") include 'add-token.php';
                        else if($typeset == "change_password") include 'change-password.php';
                        else if($typeset == "add_admin") include 'add-admin.php';
                        else if($typeset == "delete_admin") include 'delete-admin.php';
                        else if($typeset == "autolike") include 'autolike.php';
                        else if($typeset == "list_admin") include 'list-admin.php';
                        else if($typeset == "autoshare") include 'autoshare.php';
                        else if($typeset == "autofollow") include 'autofollow.php';
                    }
                
                ?>
            </div>
       </div>
