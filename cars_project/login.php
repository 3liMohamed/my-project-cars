<?php
session_start();
include_once 'connectdb.php';
?>

<?php

        if(isset($_POST['username']) && isset($_POST['pass']) ){
            $username = $_POST['username'];$pass = $_POST['pass'];
            $q = "SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$pass'";

        $r = mysqli_query($conn,$q);

        if($r){
            if(mysqli_num_rows($r) == 1){
                while ($row = mysqli_fetch_assoc($r)){
      
                    echo "1";
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['pass'] = $row['pass'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];

                }
            }else{
                echo 'Error in username or password';
            }
        }
        }else{
            echo 'error';
        }

    mysqli_close($conn);  
                ?>
