<?php
session_start();
include_once 'connectdb.php';
?>
<?php 

if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
<title>sale</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 25px;
        }
        
        .topnav .search-container {
            float: right;
        }
        
        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }
        
        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }
        
        .icon-bar {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }
        
        .icon-bar a {
            float: left;
            width: 10%;
            text-align: center;
            padding: 8px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 25px;
        }
        
        .icon-bar a:hover {
            background-color: #000;
        }
        
        .active {
            background-color: dodgerblue;
        }
        
        * {
            box-sizing: border-box;
            text-decoration: none;
        }
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .container {
            padding: 64px;
        }
        
        .row:after {
            content: "";
            display: table;
            clear: both
        }
        
        .column-66 {
            float: left;
            width: 66.66666%;
            padding: 20px;
        }
        
        .column-33 {
            float: left;
            width: 33.33333%;
            padding: 20px;
        }
        
        .large-font {
            font-size: 25px;
        }
        
        .xlarge-font {
            font-size: 40px
        }
        
        .button {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 10px;
            cursor: pointer;
            background-color: dodgerblue;
        }
        
        img {
            display: block;
            height: auto;
            max-width: 100%;
        }
        
        @media screen and (max-width: 1000px) {
            .column-66,
            .column-33 {
                width: 100%;
                text-align: center;
            }
            img {
                margin: auto;
            }
        }
        
        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: dodgerblue;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }
        
        .button:hover {
            background-color: dodgerblue
        }
        
        .button:active {
            background-color: #4CAF50;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        
        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }


        input[type=text],
        select,
        textarea {
            width: 200%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: dodgerblue;
            ;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: dodgerblue;
        }
        /* Style the container/contact section */
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }
        /* Create two columns that float next to eachother */
        
        .column {
            float: left;
            width: 20%;
            margin-top: 6px;
            padding: 20px;
            margin-left: 480px;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        
        * {
            box-sizing: border-box
        }
        .mySlides {
            display: none
        }
        
        img {
            vertical-align: middle;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Next & previous buttons */
        
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        /* Position the "next button" to the right */
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        /* Caption text */
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active,
        .dot:hover {
            background-color: #717171;
        }
        /* Fading animation */
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
        
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav .search-container {
            float: right;
        }
        
        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }
        
        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }
        
        body {
            margin: 0;
        }
        
       
        
        .icon-bar {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }
        
        .icon-bar a {
            float: left;
            width: 10%;
            text-align: center;
            padding: 8px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 25px;
        }
        
        .icon-bar a:hover {
            background-color: #000;
        }
        
        .active {
            background-color: dodgerblue;
        }
        
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        
        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

 
    </style>




<link rel="stylesheet" href="/cars_project/css//bootstrap.min.css">

    <!-- <script src="/cars_project/js/ie-emulation-modes-warning.js"></script> -->



    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/theme/">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


    <div class="icon-bar">
        <a href="home.php"><i class="fa fa-home"></i></a>
        <a href="Login.html"><i class="fa fa-fw fa-user"></i>Login</a>
        <a href="new_account.html"><i class="fa fa-fw fa-user"></i></a>
        <a href="https://demo.tutorialzine.com/2010/10/ajax-web-chat-jquery-css3/ajax-chat.html"><i class="fa fa-envelope"></i></a>
        <a class="active" href="Sale.html"><i class="fa fa-car"></i></a class="active">
        <a href="profile.html">profile</a>
    </div>


    <br>
    <br>
    <br>



    <?php



$id_user = $_SESSION['id'];

$q = "SELECT * FROM `cars` WHERE `id_user`='$id_user'";

        $r = mysqli_query($conn,$q);

        if($r){
            
            if(mysqli_num_rows($r) > 0){
                
                while ($row = mysqli_fetch_assoc($r)){


                


?>

<div class="row" style="margin-left: 27%; width: 2000px;">
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">Model       :> <? echo $row['model']; ?></h2>
              <div class="nav navbar-nav navbar-right">
            <!-- <li><a href="login.php">Login</a></li>
            <li><a href="createAc.php">Create Account</a></li>  -->
            
              <button type="submit" class="btn btn-sm btn-danger delete_post" id="<? echo $row['id']; ?>"  name="del_post" >Delete Post</button>
              
              <!-- <button type="submit" class="btn btn-sm btn-info edit_post" id="<? //echo $row['id']; ?>" name="edit_post">Edit Post</button> -->
            

            </div>
            </div>

            <div class="panel-body">

            <? echo '<img src="data:image/jpeg;base64,'.base64_encode($row['file_img'] ).'"/>  '; ?>
              <h3>city       :> <? echo $row['city']; ?></h3>
              <h3>Address    :> <? echo $row['address']; ?></h3>
            </div>
            <div class="panel-body">
              <p>Description :> <? echo $row['subject']; ?></p>
            </div>
            <hr />
            <div class="panel-body">
              <b>Price  :> <? echo $row['price']; ?></b>
              <h5>Phone :> <? echo $row['phone']; ?></h5>
              <h5>Name  :> <? echo $row['name']; ?></h5>
            </div>
          </div>
    </div>
</div>




<?php
                    
                }
            }else{
                echo 'Error no post';
            }
        
      }else{
        echo "<script>location.href='home.php'</script>";
      }


?>
    <!-- The App Section -->


<div class="update">

</div>





<script src="jquery-3.4.1.min.js"></script>

<script>



   $(document).on('click', '.delete_post', function(){
  var id_post = $(this).attr('id');
  var button  = $(this).attr('name');
    $.ajax({
      url:"delete.php",
      method:"POST",
      data:{id_post:id_post , button:button},
      success:function(data)
      {console.log(data);
          if(data == 1){
             location.reload(true);
        
            }
      }
    });
});





    </script>


</body>

</html>

    <?     mysqli_close($conn);  }else{ echo "<script>location:location.href = 'Login.html';</script>"; } ?>