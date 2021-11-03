<div class='delete-token'>
                    <h3>Xóa Token (ID) - Xóa Token theo ID tài khoản</h3>
                    <h4>Chức năng này sẽ xóa token theo id của tài khoản. Nhập ID ở khung dưới để xóa
                    </h4>
                    <form action="" method='POST'>
                        <input type="text" required name='delete_token'>
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Xóa Token chứa ID này</button>
                    </form>
                </div>

<?php
if(isset($_POST['btn-submit']))
{
    $id_delete = $_POST['delete_token'];
    $deleted = "DELETE FROM token WHERE userid='$id_delete'";
    if(mysqli_query($conn,$deleted)) echo "<script>alert('Xóa thành công !');</script>";
}


?>