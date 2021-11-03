<div class='change-password'>
                    <h3>Đổi mật khẩu Admin</h3>
                    <h4>Đổi mật khẩu của admin, hãy cân nhắc khi dùng chức năng này.
                    </h4>
                    <form action="" method='POST'>
                        <input type="password" placeholder='Mật khẩu cũ - Older Password' required name='old_pass'>
                        <input type="password" placeholder='Mật khẩu mới - New Password' required name='new_pass'>
     <input type="password" placeholder='Nhập lại Mật khẩu mới - Confirm new Password' required name='renew_pass'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Đổi mật khẩu</button>
                    </form>
                </div>

<?php
if(isset($_POST['btn-submit']))
{
    $password = md5($_POST['old_pass']);
    $newpassword = md5($_POST['new_pass']);
    $renewpassword = md5($_POST['renew_pass']);
    $check_oldpass = "SELECT password FROM boss WHERE password='$password'";
    if(mysqli_num_rows(mysqli_query($conn,$check_oldpass))== 0)
    {
        echo "<script>alert('Mật khẩu bạn nhập không đúng !')</script>";
    }
    else
    {
        if($newpassword != $renewpassword) echo "<script>alert('Mật khẩu mới nhập lại không đúng !')</script>";
        else
        {
            $update_pass = "UPDATE boss SET password='$newpassword' WHERE password='$password'";
            mysqli_query($conn,$update_pass);
            echo "<script>alert('Cập nhật mật khẩu thành công !')</script>";
        }
    }
}


?>