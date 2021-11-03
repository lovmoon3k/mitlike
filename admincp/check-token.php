<div class='check-token'>
                    <h3>Check Token Live</h3>
                    <h4>Chức năng kiểm tra xem token facebook nào còn hoạt động. Hãy nhập số lượng token 
                        muốn check ở khung dưới. Nếu để trống, hệ thống sẽ kiểm tra toàn bộ Token.
                    </h4>
                    <form action="" method='POST'>
                        <input type="text" name='number_token'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Check Token</button>
                    </form>
                </div>

<?php
$limit_check = 0;
if(isset($_POST['btn-submit']))
{
    $value_token = $_POST['number_token'];
    if($value_token < 1 || $value_token == null || $limit_check == "")
    {
        $limit_check = 9000;
    }
    else $limit_check = $value_token;

    $query_checktoken = "SELECT token FROM token ORDER BY RAND() LIMIT ".$limit_check."";
    $count = 0;
   $son_q = mysqli_query($conn,$query_checktoken);
   echo "<textarea>" ;
    while($checktoken = mysqli_fetch_array($son_q))
    {
        $idtoken = getme(trim($checktoken['token']));
        $tokeng = trim($checktoken['token']);
        $delete_checktoken = "DELETE FROM token WHERE token='$tokeng'";
        if(!isset($idtoken['id']))
        {
            echo "".$tokeng."\n";
            mysqli_query($conn,$delete_checktoken);
            $count++;
        }
    }
    echo "</textarea>" ;
    echo "<script> alert('Đã có ".$count." token bị xóa !');</script>";
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