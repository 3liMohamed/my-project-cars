<?php
session_start();
include_once 'connectdb.php';
if(isset($_SESSION['username'])){

?>



<?php 


        
        if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['model']) && isset($_POST['phone']) && isset($_POST['price']) && isset($_POST['subject'])){
            echo "done 2";
            $name   = $_POST['name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $model    = $_POST['model'];
            $phone    = $_POST['phone'];
            $price   = $_POST['price'];
            $subject   = $_POST['subject'];
            if(isset($_SESSION['id'])){
            $id_u    = $_SESSION['id'];
            }else{
            echo "<script>location.href='home.php'</script>";
        }

             if(strlen($name) >0 && strlen($address) > 0 && strlen($city) > 0 && strlen($model) > 0 && strlen($price) >0 && strlen($subject) >0 && strlen($phone) >0){

                $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                
                echo "done 3";
                 $q = "INSERT INTO `cars`(`id`, `name`, `address`,`city`, `model`, `phone`, `price`, `subject`,`file_img`, `id_user`) 
                 VALUES (null,'$name','$address','$city','$model',$phone,$price,'$subject','$image_file',$id_u)";
                 $r = mysqli_query($conn, $q);
                 if($r){
                    
                    echo "<script>location.href='myCars.php'</script>";}
                 
             }
        }
        
    
    }else{
        echo "<script>location.href='login.php'</script>";
    }
  mysqli_close($conn);  
?>