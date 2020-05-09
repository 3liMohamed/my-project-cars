<?php
include_once 'connectdb.php';
?>


<?php 


 




if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['passc'])){
    $name   = $_POST['name'];
    $username = $_POST['username'];
    $pass     = (string) $_POST['pass'];
    $passc    = (string) $_POST['passc'];


    $q = "SELECT * FROM `users` WHERE `username` = '$username'";

$r = mysqli_query($conn,$q);

if($r){
    if(mysqli_num_rows($r) == 1){
        
        echo "This username is already used. Try another username";

    }else{
       
       
        
        if(strlen($name) >0 && strlen($username) >0 && strlen($pass) >=6 && strlen($passc) >=6){
        

            if($pass == $passc){
                $done = 1;
            $q = "INSERT INTO `users`(`id`, `name`, `username`, `pass`) VALUES (null,'$name','$username','$pass')";
            $r = mysqli_query($conn, $q);
            if($r){
                    
                echo $done;
            }
        }
    }


    }
}

}



  mysqli_close($conn);  




?>