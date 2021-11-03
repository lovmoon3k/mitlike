
<div class='show-token'>
                    <h3>Show Token - Hiện Token</h3>
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

    $query_showtoken = "SELECT token FROM token";
    $qs = mysqli_query($conn,$query_showtoken);
           echo "<textarea id='showtoken'>";
            while( $showtoken = mysqli_fetch_row($qs))
            {
                echo "".implode("",$showtoken)."\n";
            }
            echo "</textarea>";
          
    }

//// check permission
?>