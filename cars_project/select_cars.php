<?php
session_start();
include_once 'connectdb.php';
?>
<?php 

if(isset($_SESSION['username'])){

    $id_post = $_SESSION['id'];
    $q = "SELECT * FROM `cars` WHERE id_user = $id_post";

$r = mysqli_query($conn,$q);

if($r){

    if(mysqli_num_rows($r) > 0){

        while ($row = mysqli_fetch_assoc($r)){

            $id_car = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $city = $row['city'];
            $model = $row['model'];
            $phone = $row['phone'];
            $price = $row['price'];
            $subject = $row['subject'];


            $array[] = array(
                "name" => $name,
                "address" =>$address ,
                "city" => $city,
                "model" => $model,
                "phone" => $phone,
                "price" => $price,
                "subject" => $subject
            );
                     
            // $data['id'] = $row['id'];
            // $data['name'] = $row['name'];
            // $data['address'] = $row['address'];
            // $data['city'] = $row['city'];
            // $data['model'] = $row['model'];
            // $data['phone'] = $row['phone'];
            // $data['price'] = $row['price'];
            // $data['subject'] = $row['subject'];
            

        }
       
        
        $asd = json_encode($array);

        echo $asd;

    }

}
        
      



?>


<?     mysqli_close($conn);  } ?>