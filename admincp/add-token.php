<div class='add-token'>
                    <h3>Thêm Token</h3>
                    <h4>Chức năng này sẽ thêm token từ khung dưới. Nếu có nhiều token, hãy xuống dòng mới.
                    </h4>
                    <form action="" method='POST'>
                        <textarea type="text" required name='add_token'> </textarea>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Thêm Token</button>
                    </form>
                </div>


 <?php
if(isset($_POST['btn-submit']))
{
    $num_update = 0;
    $num_insert = 0;
    $token_add = $_POST['add_token'];
    $data  = explode("\n", $token_add);
    foreach($data as $token)
    {
        $read = trim($token);
        $me = getme($read);
        $id_token = $me['id'];
        if($id_token)
        {
            $firstname = $me['first_name'];
            $lastname = $me['last_name'];
            $fullname = $firstname ." ".$lastname;
            $select_token = "SELECT userid FROM token WHERE userid='$id_token'";
            $update_token = "UPDATE token SET token='$token',name=N'$fullname',date_create=now() WHERE userid='$id_token'";
            $insert_token = "INSERT INTO token(userid,name,token,date_create) VALUES('$id_token',N'$fullname','$read',now())";
            if(mysqli_num_rows(mysqli_query($conn,$select_token))>=1)
            {
                mysqli_query($conn,$update_token);
                $num_update++;
            }
            else
            {
                mysqli_query($conn,$insert_token);
                $num_insert++;
            }
        }
    }
    echo "<script> alert('Đã update : ".$num_update.". Đã Insert : ".$num_insert."');</script>";
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