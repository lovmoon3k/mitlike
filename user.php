<?php include 'header.php' ;
include 'permission.php' ;
?>


<div class="content">
            <h2><?php echo $title ?></h2>
            <div class="login">
            
                <div class="login-notice">
                <img class='avatar-facebook' style='border-radius : 50%' src="https://graph.facebook.com/<?php echo $_SESSION['id'] ?>/picture?type=large" alt="Avatar">
                <br />
                    <strong style='font-size : 30px' > Xin chào bạn : <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> ( ID : <b style='color : red'> <?php echo $_SESSION['id']; ?> </b>)</strong>
<br /><br />
                    <a href='<?php echo $homedir ; ?>/logout.php' class='btn btn-tutorial'> Đăng xuất</a>
                    <p><?php echo $logo_text ?> chào mừng bạn đến với bảng người dùng, bạn hãy nhập link bài viết vào công cụ lấy id để có thể nhận được 
                    id bài viết dùng cho autolike, và các loại auto khác. Hãy nhập
                     <span style='color:red'>Url (Link bài viết) </span>của bạn vào khung dưới 
                        sau đó chọn chức năng auto bên dưới cùng.
                        Nếu bạn không biết cách sử dụng, hãy <a href="<?php echo $homedir ; ?>/tutorial.php">xem hướng dẫn</a>. 
                        <br />
                        Nếu bạn có thắc mắc hoặc có ý kiến muốn đóng góp, hãy <a href="<?php echo $phanhoi ; ?>">truy cập vào đây</a>
                    </p>
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


                    <div class="select-auto">
                        <h3>Các Chức Năng Có Trong <?php echo $logo_text ?> :</h3>
                        <div class="auto-box auto-like">
                        
                        <img src="<?php echo $homedir ; ?>/images/Reactions.jpg" alt="Autolike Facebook">
                        <a href="<?php echo $reflink ; ?>" class='btn btn-get'> Auto Reactions</a>
                        
                        </div>
                        <div class="auto-box auto-comment">
                        <img src="<?php echo $homedir ; ?>/images/comment.png" alt="Autolike Facebook">
                        <a href="#" class='btn btn-get' onclick='update();'> Auto Share</a>
                        </div>
                        <div class="auto-box auto-follow">
                        <img src="<?php echo $homedir ; ?>/images/follow.png" alt="Autolike Facebook">
                        <a href="#" onclick='update();' class='btn btn-get'> Auto Follow</a>
                        </div>
<script>
    function update()
    {
        alert("Tính năng này đang được cập nhật !");
    }
</script>
                    </div>
                </div>
         
            </div>
        </div>



<?php include 'footer.php' ?>