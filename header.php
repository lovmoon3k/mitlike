<?php
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo  $title ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place this data between the <head> tags of your website --> 
<meta name="description" content="<?php echo $title ; ?>" /> 
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $title ; ?>" />
<meta property="og:type" content="article" /> 
<meta property="og:url" content="<?php echo $homedir ; ?>" />
<meta property="og:description" content="<?php echo $title ; ?>" /> 
<meta property="og:site_name" content="<?php echo $title ; ?>" /> 
<meta property="fb:admins" content="<?php echo $fb_adminid ; ?>" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $homedir ; ?>/css/fontawesome.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo $homedir ; ?>/css/style.css" />
    <script src='<?php echo $homedir; ?>/js/jquery-3.3.1.min.js'></script>
<link rel="icon"  type="image/x-icon" href="<?php echo $icon ; ?>">
</head>
<body>
    <div class="body-text">
    <div class="nav-head nav">
            <div class="logo">
                <h1> <?php echo $logo_text ?> </h1>
            </div>
</div>
        <div class="notice">
            <strong> <?php echo $notice ?></strong>
        </div>

        <?php 
        function getme($o) {
            return json_decode(auto('https://graph.facebook.com/me?access_token='.$o),true);
         }
        function auto($url){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, $url);
            $ch = curl_exec($curl);
            curl_close($curl);
            return $ch;
            }
        
        ?>