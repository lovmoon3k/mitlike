<?php
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tool Lấy ID STT, Lấy ID Bài Viết, Video, Ảnh Facebook - MITLIKE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place this data between the <head> tags of your website --> 
<meta name="description" content="Tool Lấy ID STT, Lấy ID Bài Viết, Video, Ảnh Facebook dễ dàng cho bạn" /> 
<!-- Open Graph data -->
<meta property="og:title" content="Tool Lấy ID STT, Lấy ID Bài Viết, Video, Ảnh Facebook" />
<meta property="og:type" content="article" /> 
<meta property="og:url" content="<?php echo $homedir ; ?>" />
<meta property="og:description" content="Tool Lấy ID STT, Lấy ID Bài Viết, Video, Ảnh Facebook dễ dàng cho bạn" /> 
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


<div class="content">
            <h2><?php echo $title ?></h2>
            <div class="login">
            
                <div class="login-notice">
                    <p><?php echo $logo_text ?> là website tăng like facebook, autolike facebook, hacklike facebook
                        hoàn toàn miễn phí. Đây là ứng dụng giúp cho các bạn trao đổi like facebook
                        với nhau một cách an toàn.
                    </p>
                    <p>
                    Đây là công cụ giúp bạn lấy được id bài viết, status, ảnh để giúp các bạn hacklike, auto like facebook
                        cho bạn hoặc cho người khác
                    </p>
                    <div class="id-post">
                        <p style='font-size : 20px;color:red'><?php echo $logo_text ?> ID Tool - Công cụ lấy id bài viết <?php echo $boss ?></p>
                      <div id='get_id_stt_result'></div>
                      <br />
                        <input class='input-content' id='get_id_stt_input' type="text" placeholder='Nhập Url bài viết của bạn vào đây để lấy ID'> </input>
                        <button type='submit' id='get_id' class='btn btn-get'> Lấy ID</button>
                        <a target='_blank' href='<?php echo $homedir ; ?>'>
                             <button class='btn btn-tutorial'>Quay về trang chủ</button>
                        </a>
                    
                        <script>
                            $('#get_id').click(function() {
                            var str = document.getElementById("get_id_stt_input").value;
                            var m= str.match(/(.*)\/photo.php\?fbid=([0-9]{8,})/);
                            if(!m){var m= str.match(/(.*)\/video.php\?v=([0-9]{8,})/);}
                            if(!m){var m= str.match(/(.*)\/story.php\?story_fbid=([0-9]{8,})/);}
                            if(!m){var m= str.match(/(.*)\/permalink.php\?story_fbid=([0-9]{8,})/);}
                            if(!m){var m= str.match(/(.*)\/([0-9]{8,})/);}
                            var n= str.match(/(.*)comment_id=([0-9]{8,})/);
                            if(n){
                            var i= m[2]+"_"+n[2];
                            }else{
                            var i= m[2];
                            }
                            $('#get_id_stt_result').html('ID bài viết này là : <b style="color:red" >'+i+'</b>'); 
                            });
                        </script>
                    </div>
                </div>
         
            </div>
        </div>



<?php include 'footer.php' ?>