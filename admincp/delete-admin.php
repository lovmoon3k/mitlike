<div class='delete-admin'>
                    <h3>Xóa Admin</h3>
                    <h4> Chức năng này sẽ loại bỏ admin đã chỉ định có trong hệ thống . <b style='color:red'> 
                        Dùng thật cẩn thận, nó có thể xóa cả bạn
                    </b>
                    </h4>
                    <form action="" method='POST'>
<input id='username' type="text" placeholder='Tên Tài Khoản Cần Xóa - User Name for Delete' required name='user_d'>
        <input type="password" placeholder='Mật khẩu của bạn - Your Password' required name='pass_d'>
     <input type="password" placeholder='Nhập lại Mật khẩu - Confirm your Password' required name='repass_d'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Tiến hành xóa</button>
                    </form>
                </div>

<?php 
    if(isset($_POST['btn-submit']))
    {
        $taikhoan = $_POST['user_d'];
        $matkhau = md5($_POST['pass_d']);
        $repass = md5($_POST['repass_d']);
        $select_admin = "SELECT * FROM boss WHERE username='$taikhoan'";
        $deleted = "DELETE FROM boss WHERE username='$taikhoan'";
        if(mysqli_num_rows(mysqli_query($conn,$select_admin))>=1)
        {
            if($matkhau != $repass) echo "<script> alert('Mật khẩu nhập lại không trùng khớp!');</script>";
            else
            {
                mysqli_query($conn,$deleted);
                echo "<script> alert('Xóa Admin thành công !');</script>";
            }
        }
        else
        {
            echo "<script> alert('Tài khoản này không có trong hệ thống!');</script>";
        }
    }


?>