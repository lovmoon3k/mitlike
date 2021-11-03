                    <li><a href="<?php echo $homedir; ?>/layid.php" target='_blank'>Lấy ID STT</a></li>
                    <li><a href="<?php echo $homedir; ?>/admincp/admin.php?type=check_token">Check Token Live</a></li>
                    <li><a href="<?php echo $homedir; ?>/admincp/admin.php?type=add_token">Thêm Token</a></li>
                    <li><a href="<?php echo $homedir; ?>/admincp/admin.php?type=change_password">Đổi mật khẩu</a></li>
                    <li><a href="<?php echo $homedir; ?>/admincp/admin.php?type=list_admin">List Admin</a></li>
                    <li><a href="<?php echo $homedir; ?>/admincp/logout.php">Đăng xuất</a></li>

<?php
    $checktype = array("show_token","delete_token","add_admin","delete_admin","autolike","autoshare","autofollow");
    if(isset($_GET['type']))
    {
        for($i=0;$i<count($checktype);$i++)
        {
            if($_GET['type'] == $checktype[$i]) header("location: ".$homedir."/admincp/admin.php?type=check_token");
        }
    }


?>