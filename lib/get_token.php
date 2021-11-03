<?php

if(!isset($_SESSION['username']))
{

    // header("location:../index.php");
    echo "<script>alert('Bạn phải nhập tài khoản và mật khẩu !!');window.close();</script>";
}

if($_GET) $_POST = $_GET;
$secretkey = "c1e620fa708a1d5696fb991c1bde5662";
$api_key = "3e7c78e35a76a9299309885393b02d97";

function tao_sig($postdata){
global $secretkey;
$textsig = "";
foreach($postdata as $key => $value){
$textsig .= "$key=$value";
}
$textsig .= $secretkey;
$textsig = md5($textsig);

return $textsig;
}

$postdata = array(
"api_key" => $api_key,
"email" => $_SESSION['username'],
"format" => "JSON",
"locale" => "vi_vn",
"method" => "auth.login",
"password" => $_SESSION['password'],
"return_ssl_resources" => "0",
"v" => "1.0"
);

$postdata['sig'] = tao_sig($postdata);

?>
<!-- <iframe width="100%" id='token-geted' height="300" src="#"></iframe>
<script>
function gettoken()
{
    document.getElementById('token-geted').src = "https://api.facebook.com/restserver.php? 
    
    ";
}
</script> -->
<iframe width="100%" height="100%" src="https://api.facebook.com/restserver.php?<?php echo http_build_query($postdata);?>"></iframe>