<?php
include 'config.php';
$sql = "CREATE TABLE  IF NOT EXISTS boss(
    id int primary key AUTO_INCREMENT,
    username nvarchar(50) not null,
    password varchar(50) not null,
    permission tinyint not null,
    add_date TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
echo $count_delay;


$query = mysqli_query($conn,$sql);

if($query)
{
    $sql = "CREATE TABLE  IF NOT EXISTS token(
        id int primary key AUTO_INCREMENT,
        userid varchar(15),
        name nvarchar(50),
        token text not null,
        date_create TIMESTAMP
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
    mysqli_query($conn,$sql);
    $sql = "CREATE TABLE  IF NOT EXISTS autolike(
        id int primary key AUTO_INCREMENT,
        userid varchar(15) references token(userid),
        name nvarchar(50) references token(name),
        token text references token(token),
        auto_delay int,
        auto_date TIMESTAMP
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
    mysqli_query($conn,$sql);
    $sql = "CREATE TABLE  IF NOT EXISTS autoshare(
        id int primary key AUTO_INCREMENT,
        userid varchar(15) references token(userid),
        name nvarchar(50) references token(name),
        token text references token(token),
        auto_delay int,
        auto_date TIMESTAMP
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
    mysqli_query($conn,$sql);
    $sql = "CREATE TABLE  IF NOT EXISTS autofollow(
        id int primary key AUTO_INCREMENT,
        userid varchar(15) references token(userid),
        name nvarchar(50) references token(name),
        token text references token(token),
        auto_delay int,
        auto_date TIMESTAMP
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
    mysqli_query($conn,$sql);
        
    $sql_insert = "INSERT INTO boss(username,password,permission,add_date) VALUES('$admin_username','$admin_password',1,now())";
$sql_update = "UPDATE boss SET username='$admin_username',password='$admin_password',add_date=now()";
$sql_select = "SELECT * FROM boss WHERE username='$admin_username'";

if(mysqli_num_rows(mysqli_query($conn,$sql_select))>=1)
{
    mysqli_query($conn,$sql_update);
}
else{
    mysqli_query($conn,$sql_insert);
}
    echo "<br />" . mysqli_error($conn);

}
else{
    echo "Cài đặt thất bại <br />" . mysqli_error($conn);
}
mysqli_close($conn);
?>