<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mitlike";
$admin_username = "trungro12";
$admin_password = "12345";
$admin_password = md5($admin_password);
$cslog = "Code by Trung Pham";
$title = "MITLIKE - Tăng Like Facebook, Auto Like, Sub, Share Facebook";
$boss = "by Trung Phạm";
$phanhoi = ""; // Url phản hồi
$fb_admin = "//fb.com/pham.quangtrung2";
$fb_adminid = "100006433342112";
$logo_text = "<a class='logo-text' href='/'> MITLIKE </a>";
$notice = "Xin chào các bạn đến với MITLIKE ". $boss ." - Tăng Like Facebook, Auto Like Facebook, Buff Sub, Auto Share, Auto Follow Facebook Miễn Phí";

$reflink = "";
$reflinkshare = "";
$reflinkfollow = "";
$homedir = "";
$icon = "images/facebook.png";
$delay_time = 60 * 30; // thoi gian cho mac dinh la 30 phut
$auto_delay = time() + $delay_time; // thoi gian delay de tang like
$count_delay = $delay_time/60; // hien thi so phut cho lan tang like ke tiep

$conn = mysqli_connect($host,$username,$password,$dbname) or die ("Database bị lỗi không thể kết nối");
echo "<script>console.log('".$cslog."') </script>";
?>

