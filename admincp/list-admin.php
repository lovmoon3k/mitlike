<div class='change-password'>
                    <h3>Danh Sách các Admin trong hệ thống</h3>
                    <h4>Hiện thị danh sách admin. Permission (1 là Full Quyền, 2 là vài quyền hạn)
                    </h4>
                    <form action="" method='POST'>
                        <button type='submit' name='btn-submit' class='btn btn-get'> Hiện Danh Sách</button>
                    </form>
                </div>

<?php

if(isset($_POST['btn-submit']))
{
    $select = "SELECT * FROM boss";
    echo "<ul class='list-admin'> ";
    $fetch = mysqli_query($conn,$select);
    while($data = mysqli_fetch_assoc($fetch))
    {
        echo "<li style='list-style-type : decimal;'><b> ID (" . $data['id'] .") : <span style='color : red'>".$data['username']. "</span> , Permission : ". $data['permission']."</li></b>";
    }
    echo "</ul> ";
}