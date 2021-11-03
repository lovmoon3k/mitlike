
<div class='show-tokenid'>
                    <h3>Show Token ID - Hiện Token theo ID</h3>
                    <h4>
                    </h4>
                    <form action="" method='POST'>
                        <!-- <input type="text" name='show_token'> -->
                        <br />
                        <button type='submit' name='btn-submit' class='btn btn-get'> Show Token</button>
                    </form>
                    <h3>Token :</h3>
                    
                </div>

<?php
    if(isset($_POST['btn-submit']))
    {
        mysqli_set_charset($conn, 'UTF8');

    $query_showtoken = "SELECT userid,name,token FROM token";
    $qs = mysqli_query($conn,$query_showtoken);
    echo "<div class='showid'>";
           echo "<ul>";
            while( $showtoken = mysqli_fetch_array($qs))
            {
                echo "<li style='text-align : left'><b> <span style='color : red'>". $showtoken['userid'] ."</span> : " . $showtoken['name'] . "</b></li>";
            }
            echo "</ul>";
     echo "</div>";
    }

//// check permission
?>