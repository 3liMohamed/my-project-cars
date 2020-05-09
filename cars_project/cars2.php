<?

include_once 'connectdb.php';
$output = '';

if(isset($_POST['search'])){

    searchData($_POST['search'],$conn);

}elseif(isset($_POST['from']) && isset($_POST['to'])){

betweenPrice($_POST['from'],$_POST['to'],$conn);

}else{
    $q = "SELECT * FROM `cars` ORDER BY `id` ASC";

        $r = mysqli_query($conn,$q);

        if($r){
            if(mysqli_num_rows($r) > 0){
                while ($row = mysqli_fetch_assoc($r)){

                $output .= '<div class="row" style="margin-left: 27%; width: 2000px;">'.
                '<div class="col-sm-4">'.
                 '<div class="panel panel-primary">'.
                  '      <div class="panel-heading">'.
                   '       <h2 class="panel-title">Model       :> '. $row['model'] .'</h2>'.
                    '      <div class="nav navbar-nav navbar-right">'.
                        

                     '   </div>'.
                      '  </div>'.
            
                       ' <div class="panel-body">'.
            
                        '<img src="data:image/jpeg;base64,'.base64_encode($row['file_img'] ).'"/>  '.
                        ''.
                        '  <h3>city       :> '. $row['city']. '</h3>'.
                         ' <h3>Address    :> '. $row['address']. '</h3>'.
                        '</div>'.
                        '<div class="panel-body">'.
                         ' <p>Description :> '. $row['subject']. '</p>'.
                        '</div>'.
                        '<hr />'.
                        '<div class="panel-body">'.
                         ' <b>Price  :> '. $row["price"]. '</b>'.
                          '<h5>Phone :> '. $row["phone"]. '</h5>'.
                          '<h5>Name  :>'. $row["name"]. '</h5>'.
                       ' </div>'.
                      '</div>'.
             '   </div>'.
            '</div>';

                   

                }echo $output;
            }else{
                echo "<script>location.href='profile.php'</script>";
            }
            }

        }

function searchData($search , $conn){

    $q = "SELECT * FROM `cars` WHERE CONCAT(`model`) LIKE '%".$search."%' ORDER BY `id` ASC";

    $r = mysqli_query($conn,$q);



    if($r){
        $outputSar = '';
        if(mysqli_num_rows($r) > 0){

            

            while ($row = mysqli_fetch_assoc($r)){
                $model = $row['model'];
                $name = $row['name'];
                $price = $row["price"];
                $phone = $row["phone"];
                $subject = $row['subject'];
                $address = $row['address'];
                $city = $row['city'];

                $outputSar .= '<div class="row" style="margin-left: 27%; width: 2000px;">'.
                '<div class="col-sm-4">'.
                 '<div class="panel panel-primary">'.
                  '      <div class="panel-heading">'.
                   '       <h2 class="panel-title">Model       :> '. $model .'</h2>'.
                    '      <div class="nav navbar-nav navbar-right">'.
                        

                     '   </div>'.
                      '  </div>'.
            
                       ' <div class="panel-body">'.
            
                        '<img src="data:image/jpeg;base64,'.base64_encode($row['file_img'] ).'"/>  '.
                        ''.
                        '  <h3>city       :> '. $city. '</h3>'.
                         ' <h3>Address    :> '. $address. '</h3>'.
                        '</div>'.
                        '<div class="panel-body">'.
                         ' <p>Description :> '. $subject. '</p>'.
                        '</div>'.
                        '<hr />'.
                        '<div class="panel-body">'.
                         ' <b>Price  :> '. $price. '</b>'.
                          '<h5>Phone :> '. $phone. '</h5>'.
                          '<h5>Name  :>'. $name. '</h5>'.
                       ' </div>'.
                      '</div>'.
             '   </div>'.
            '</div>';

            }
        }
    }
   echo $outputSar; 
    
}

function betweenPrice($from , $to , $conn)
{
    $q = "SELECT * FROM `cars` WHERE price BETWEEN $from AND $to ORDER BY `id` ASC";

    $r = mysqli_query($conn,$q);



    if($r){
        $outputSar = '';
        if(mysqli_num_rows($r) > 0){

            

            while ($row = mysqli_fetch_assoc($r)){
                $model = $row['model'];
                $name = $row['name'];
                $price = $row["price"];
                $phone = $row["phone"];
                $subject = $row['subject'];
                $address = $row['address'];
                $city = $row['city'];

                $outputSar .= '<div class="row" style="margin-left: 27%; width: 2000px;">'.
                '<div class="col-sm-4">'.
                 '<div class="panel panel-primary">'.
                  '      <div class="panel-heading">'.
                   '       <h2 class="panel-title">Model       :> '. $model .'</h2>'.
                    '      <div class="nav navbar-nav navbar-right">'.
                        

                     '   </div>'.
                      '  </div>'.
            
                       ' <div class="panel-body">'.
            
                        '<img src="data:image/jpeg;base64,'.base64_encode($row['file_img'] ).'"/>  '.
                        ''.
                        '  <h3>city       :> '. $city. '</h3>'.
                         ' <h3>Address    :> '. $address. '</h3>'.
                        '</div>'.
                        '<div class="panel-body">'.
                         ' <p>Description :> '. $subject. '</p>'.
                        '</div>'.
                        '<hr />'.
                        '<div class="panel-body">'.
                         ' <b>Price  :> '. $price. '</b>'.
                          '<h5>Phone :> '. $phone. '</h5>'.
                          '<h5>Name  :>'. $name. '</h5>'.
                       ' </div>'.
                      '</div>'.
             '   </div>'.
            '</div>';

            }
        }
    }
   echo $outputSar; 
}


?>