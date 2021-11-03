<div class='add-admin'>
                    <h3>Thêm Admin</h3>
                    <h4>Thêm admin vào hệ thống
                    </h4>
                    <form action="" method='POST'>
                <input id='username' type="text" placeholder='Tên Tài Khoản - User Name' required name='admin_add'>
              <input type="password" placeholder='Mật khẩu - Password' required name='admin_pass'>
                <input type="password" placeholder='Nhập lại Mật khẩu - Confirm Password' required name='admin_repass'>                       
                 <input type="text" placeholder='Quyền - Permission' required name='admin_permission'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Thêm Tài Khoản</button>
                    </form>
                </div>

<?php
    if(isset($_POST['btn-submit']))
    {
        $taikhoan = $_POST['admin_add'];
        $matkhau = md5($_POST['admin_pass']);
        $repass = md5($_POST['admin_repass']);
        $per = $_POST['admin_permission'];
        if($per <1 || $per > 2) $per = 2;
        $select_admin = "SELECT * FROM boss WHERE username='$taikhoan'";
        $insert_admin = "INSERT INTO boss(username,password,permission,add_date) VALUES('$taikhoan','$matkhau','$per',now())";
        if(mysqli_num_rows(mysqli_query($conn,$select_admin))>=1)
        {
            echo "<script> alert('Tài khoản này đã có trong hệ thống !');</script>";
        }
        else
        {
            if($matkhau != $repass) echo "<script> alert('Mật khẩu nhập lại không trùng khớp!');</script>";
            else
            {
                mysqli_query($conn,$insert_admin);
                echo "<script> alert('Thêm Admin thành công !');</script>";
            }
        }
    }

?>