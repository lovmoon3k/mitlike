<?php include 'header.php' ;
include 'permission.php';
$prelink = $_SERVER['HTTP_REFERER'];
if($reflink != "")
{
    if($prelink != "".$homedir."/reactions.php")
    {
        if($prelink != $reflink)
        {
        echo "<script>alert('Bạn làm sai thao tác, xin mời thử lại');top.location.href='".$homedir."/'; </script>";
        }
    }
}
?>


<div class="content">
            <h2><?php echo $title ?></h2>
            <div class="login">
            
                <div class="login-notice">
                <img class='avatar-facebook' style='border-radius : 50%' src="https://graph.facebook.com/<?php echo $_SESSION['id'] ?>/picture?type=large" alt="Avatar">
                <br />
                    <strong style='font-size : 30px' > Xin chào bạn : <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> ( ID : <b style='color : red'> <?php echo $_SESSION['id']; ?> </b>)</strong>
<br /><br />
                    <a href='<?php echo $homedir; ?>/logout.php' class='btn btn-tutorial'> Đăng xuất</a>
                    <div class="id-post">
                        <p style='font-size : 20px;color:red'>Công cụ lấy id bài viết <?php echo $boss ?></p>
                      <div id='get_id_stt_result'></div>
                      <br />
                        <input class='input-content' id='get_id_stt_input' type="text" placeholder='Nhập Url bài viết của bạn vào đây để lấy ID'> </input>
                        <button type='submit' id='get_id' class='btn btn-get'> Lấy ID</button>
                    
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

                    <div class="reactions">
                        <h3 style='font-size : 40px;'>Autolike Facebook - Auto Reactions Facebook</h3>
                        <img src="<?php echo $homedir; ?>/images/Reactions.jpg" alt="Autolike Facebook - Auto Reactions Facebook">
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

<h4>Chọn số lượng</h4>
                        <select name='number'>
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
  <option value="50">50</option>
</select>
<h4>ID Bài viết</h4>

                        <input class='input-content' required name='postid' type="text" placeholder='Nhập ID bài viết của bạn vào đây' > </input>

<button type='submit' class='btn btn-get' name='auto-submit' > Tiến Hành Auto</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php' ?>

<?php

if(isset($_POST['auto-submit']))
{
    $num = $_POST['number'];
    $query_num = "SELECT token FROM token ORDER BY RAND() LIMIT ".$num."";
    $type = $_POST['reaction'];
    $post = $_POST['postid'];
    $name = $_SESSION['firstname']." ".$_SESSION['lastname'];
    $userid = $_SESSION['id'];
    $tokenn =  $_SESSION['token'];
    $update_autolike = "UPDATE FROM autolike SET name=N'$name',auto_delay=$auto_delay,auto_date=now() WHERE userid='$userid'";
    $insert_autolike = "INSERT INTO autolike(userid,name,token,auto_delay,auto_date) VALUES('$userid',N'$name','$tokenn','$auto_delay',now())";
    $select_autolike = "SELECT * FROM autolike WHERE userid='$userid'";
    $check_aut = getme($tokenn);
    $data_token = mysqli_fetch_array(mysqli_query($conn, $select_autolike));
    if($check_aut)
    {
        if(!isset($check_aut['id']))
        {
            echo "<script> alert('Token của bạn đã hết hạn ! Vui lòng thử lại !!!');top.location.href='".$homedir."/logout.php';</script>";
        }
        else
        {
            if(mysqli_num_rows(mysqli_query($conn, $select_autolike))>=1)
            {
                if($data_token['auto_delay']>= time())
                {
                    echo "<script> alert('Auto mỗi lần chờ là ".$count_delay." phút. Hãy thử lại sau !');top.location.href='".$homedir."/user.php';</script>";
                }
                else{
                    mysqli_query($conn,$update_autolike);
                    action($post,$type,$query_num,$count_delay,$conn);
                }
            }
            else
            {
                mysqli_query($conn,$insert_autolike);
                action($post,$type,$query_num,$count_delay,$conn);

            }
        }
    }
    else{
        echo "<script>alert('Đăng nhập thất bại, token của bạn đã hết hạn !!!'); top.location.href='".$homedir."/logout.php';</script>";
    }
}


function action($post,$type,$query_num,$count_delay,$conn)
{
    $son = mysqli_query($conn,$query_num);
    while($gettk = mysqli_fetch_array($son))
    {
        $full = trim($gettk['token']);
        auto("https://graph.facebook.com/".$post."/reactions?method=post&type=".$type."&access_token=".$full);
    }

    echo "<script>alert('Like thành công :D, vui lòng chờ ".$count_delay." phút để dùng tiếp');top.location.href='".$homedir."/';</script>";
}
?>