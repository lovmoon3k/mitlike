<?php  include 'header.php' ;  if(isset($_SESSION['id']))
  {
    header("location: ".$homedir."/user.php");
  }?>
        <div class="content">
            <h2><?php echo $title ?></h2>
            <div class="login">
            
                <div class="login-notice" id='login-notice'>
                <img src="<?php echo $homedir; ?>/images/Reactions.jpg" alt="Tăng Like Facebook, Auto Like Facebook miễn phí">
                    <p><?php echo $logo_text ?> là website tăng like facebook, autolike facebook, hacklike facebook, auto sub, buff sub, auto share hoàn toàn miễn phí. Đây là ứng dụng giúp cho các bạn trao đổi like, sub, share facebook
                        với nhau một cách an toàn. Mỗi khu vực phân đều việc trao đổi riêng. Chỉ cần điền <span style='color:red'>token facebook </span>của bạn vào khung dưới 
                        là bạn có thể sử dụng tăng like, hacklike, buff sub, share cho facebook.
                    </p>
                    <p>
                        Nếu có thắc mắc hay có những vấn đề khi sử dụng hệ thống, hãy để lại nhận xét <a href="<?php echo $phanhoi ?>" target='_blank'>tại đây</a>
                    </p>
                </div>
                <div class="tool">
                   <form action="<?php echo $homedir; ?>/login.php" method="POST">
                    <a href="#token-geted" class="btn btn-get"> Lấy Token</a>
                    <a href="<?php echo $homedir; ?>/layid.php" target='_blank' class="btn btn-get"> Lấy ID</a>
                    <a href="<?php echo $homedir; ?>/tutorial.php" target='_blank' class="btn btn-tutorial"> Hướng dẫn</a>
                    <a href="#" class="btn btn-vip" onclick='vip();'> Đăng nhập VIP </a>
                    <input name='token' autocomplete='off' minlength='100' required type='text' placeholder='Nhập Token của bạn vào đây'> 
                </input>
                      <button name='login' type='submit' class='btn btn-get submit'> Đăng Nhập</button>
                   </form>


                   <script>
                        function vip()
                        {
                            alert("Tính năng này đang trong quá trình phát triển !");
                        }
                   </script>
<br />
<img src="<?php echo $homedir; ?>/images/facebook.png" alt="Công cụ Get - Lấy Token Facebook">
<br />    
                <div class="login-facebook">
                        <h3 style='font-size : 40px;color : red'><?php echo $logo_text ?> Tool - Công cụ lấy token Facebook</h3>
                        <p style='font-weight : 600;font-size : 20px'> Đây là công cụ sẽ giúp bạn lấy mã token facebook, và từ đó đăng nhập vào 
                            hệ thống để sử dụng chức năng <?php echo $title ?>
                        </p>
                        <p style='font-weight : 600;font-size : 20px'>Nếu bạn không biết sử dụng công cụ này, hãy <a style='color:red;text-decoration: none!important' target='_blank' href="<?php echo $homedir; ?>/tutorial.php">Xem Hướng Dẫn </a> </p>
                        <form id='token-geted' action="" method="POST">
                        <input type='text' id='username' name='username' required placeholder='Tài Khoản - Username'> </input>
                        <input type='password' id='password' name='password'  autocomplete='off' required placeholder='Mật khẩu - Password'> </input>
                        <br />
                       <a href="#token-geted"><button name='btn-submit' type='submit'  class='btn btn-get submit loginf'> Lấy Token
                </button></a> 
                <?php 
                
                   if(isset($_POST['btn-submit']))
                   {
                       
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
                    "email" => $_POST['username'],
                    "format" => "JSON",
                    "locale" => "vi_vn",
                    "method" => "auth.login",
                    "password" => $_POST['password'],
                    "return_ssl_resources" => "0",
                    "v" => "1.0"
                    );
                    
                    $postdata['sig'] = tao_sig($postdata);
                    
                    // echo "<iframe width='100%' height='100%' src='https://api.facebook.com/restserver.php?". http_build_query($postdata). "></iframe>";
                    }
                  
                   ?>
                        </form>
                        <a href="#login-notice"> <button class='btn btn-get ' style='width:100%'> Đăng Nhập
                </button>
                </a>
                <iframe width='100%' height='100' src="https://api.facebook.com/restserver.php?<?php echo  http_build_query($postdata);?>"></iframe>
    <img  width='100%' src='<?php echo $homedir; ?>/images/TokenRS.png'>    
                </div>

                </div>
            </div>
        </div>

    
  <?php include 'footer.php' ?>

  <?php 
  if(isset($_GET['info']))
  {
    if($_GET['info'] == "notToken")
    {
        echo "<script> alert('Token của bạn đã đăng xuất hoặc đã hết hạn sử dụng !');top.location.href='".$homedir."/index.php#token-geted';</script>";
    }
  }
// if($_GET['info'] == "notToken")
// {
//     echo "<script> alert('Token của bạn sai hoặc đã hết hạn sử dụng. Vui lòng nhập Token mới !');</script>";
// }
// if($_SESSION['token'])
// {
//     header("location: /user.php");
// }
?>