<div class='change-password'>
                    <h3>Autolike dành cho Admin</h3>
                    <h4>Chức năng này sẽ tăng like cho admin không cần phải chờ
                    </h4>
                    <form action="" method='POST'>
                    <h4>Chọn kiểu Reactions</h4>
                        <select name='reaction'>
  <option value="LIKE">LIKE</option>
  <option value="LOVE">LOVE</option>
  <option value="WOW">WOW</option>
  <option value="HAHA">HAHA</option>
  <option value="SAD">SAD (Buồn)</option>
  <option value="ANGRY">ANGRY (Tức giận)</option>
</select>
<br />
                        <input type="text" placeholder='ID Bài Viết' required name='id_post'>
                        <input type="text" placeholder='Số Lượng cần like - Number for Like' required name='number'>
                        <input type="password" placeholder='Mật khẩu của bạn - Your Password' required name='password'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Tiến hành auto</button>
                    </form>
                </div>  

<?php
if(isset($_POST['btn-submit']))
{
    $num = $_POST['number'];
    $password = md5($_POST['password']);
    $idstt = $_POST['id_post'];
    $type = $_POST['reaction'];
    $select = "SELECT password FROM boss WHERE password='$password'";
    $numberq = "SELECT token FROM token ORDER BY RAND() LIMIT ".$num."";
    if(mysqli_num_rows(mysqli_query($conn,$select)) == 0)
    {
        echo "<script>alert('sai mật khẩu !');</script>";
    }
    else
    {
        action($idstt,$type,$conn,$numberq);
    }
    
}
function action($post,$type,$conn,$numberq)
{
    $gtoken = mysqli_query($conn,$numberq);
    while($gettk = mysqli_fetch_array($gtoken))
    {   $full = trim($gettk['token']);
        auto("https://graph.facebook.com/".$post."/reactions?method=post&type=".$type."&access_token=".$full);
    }

    echo "<script>alert('Like thành công :D');</script>";
}
function auto($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    curl_setopt($curl, CURLOPT_URL, $url);
    $ch = curl_exec($curl);
    curl_close($curl);
    return $ch;
    }
?>