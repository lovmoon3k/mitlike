<?php
session_start();
include "".$_SERVER['DOCUMENT_ROOT']."/lib/config.php";
$data = getme($_POST['token']);
    if($data['id'])
    {
        $_SESSION['id'] = $data['id'];
        $user_id = $data['id'];
        $_SESSION['token'] = $_POST['token'];
        $_SESSION['firstname'] = $data['first_name'];
        $_SESSION['lastname'] = $data['last_name'];
        $token_login = $_POST['token'];
        $fullname = $data['first_name'] . " " . $data['last_name'];
        $query = "INSERT INTO token(userid,token,name,date_create) VALUES('$user_id','$token_login',N'$fullname',now())";
        $kt = "SELECT * FROM token WHERE userid='$user_id'";
        $update = "UPDATE token SET token = '$token_login',name=N'$fullname', date_create=now() WHERE userid='$user_id'";
        if(mysqli_num_rows(mysqli_query($conn,$kt)) >= 1)
        {
            mysqli_query($conn,$update);
        }
        else{
            mysqli_query($conn,$query);
        }
       header("location: ".$homedir."/user.php");
    }
    else{
        header("location: ".$homedir."/index.php?info=notToken");
    }

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