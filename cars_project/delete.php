<?php
session_start();
include_once 'connectdb.php';


if(isset($_POST["id_post"]) && isset($_POST["button"])){

    if($_POST["button"] == 'del_post'){
        $id_post = $_POST["id_post"];
        $q = "DELETE FROM `cars` WHERE `id`=$id_post";
        $r = mysqli_query($conn, $q);
        
        
        if($r){
            $done = 1;         
            echo $done;
        //     //header("Location: posts_user.php");
        }

}

}






?>