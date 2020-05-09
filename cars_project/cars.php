<?php
session_start();
include_once 'connectdb.php';
?>

<!DOCTYPE html>
<html>
    
<head>
<title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.active {
    background-color: dodgerblue;
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

  @import url('ganapathy-kumar-iIE7o__fhN4-unsplash.jpg');

  html,
  body {
    background-image: url('ganapathy-kumar-iIE7o__fhN4-unsplash.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
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
    background-color: dodgerblue;
  }

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
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
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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

.active, .dot:hover {
  background-color:dodgerblue;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
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
</style>

<link rel="stylesheet" href="/cars_project/css//bootstrap.min.css">

    <!-- <script src="/cars_project/js/ie-emulation-modes-warning.js"></script> -->



    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/theme/">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


        <div class="icon-bar">
                <a class="active" href="Home.html"><i class="fa fa-home"></i></a>
                <a  href="Login.html"><i class="fa fa-fw fa-user"></i>Login</a>
                <a href="New account.html"><i class="fa fa-fw fa-user"></i></a>
                <a href="https://demo.tutorialzine.com/2010/10/ajax-web-chat-jquery-css3/ajax-chat.html"><i class="fa fa-envelope"></i></a>
                <a href="Sale.html"><i class="fa fa-car"></i></a>
                <a href="Sale.html">profile</a>
                <div class="topnav">
                    
                    
                    <div class="search-container">
                      
                        <input type="text" class="search" placeholder="Search.." name="search">
            
                        <button type="submit" ><i class="fa fa-search"> </i></button>
                      
                        

                    </div>
                  </div>
            
             
</div>
<div style="padding-left: 700px;padding-top: 50px">
<input type="number" class="from" placeholder="Form.."  style="width: 100px" >
                        <label>Between Price</label>
                        <input type="number" class="to" placeholder="To.." style="width: 100px">
                        <button type="submit" class="btn btn-sm btn-info btnSar">Between Price</button></div>

<br>
<br>
<br>

<div class="posts"></div>



  <!-- The App Section -->
  <script src="jquery-3.4.1.min.js"></script>
<script>

setInterval(function(){
if($('.search').val() == ''){
  $.ajax({
    url:"cars2.php",
    method:"POST",

    success:function(data){

      $('.posts').html(data);

      //console.log("data");
    }
  });
}

},1000);


$(document).on('keyup', '.search', function(){

var search = $(this).val();
$('.posts').html('');
if(search != ''){
  $.ajax({
    url:"cars2.php",
    method:"POST",
    data:{search:search},
    success:function(data){
      $('.posts').html('');
     $('.posts').html(data);

    //  console.log(data);
    }
  });
}

});
$(document).on('click', '.btnSar', function(){
  
  var from = $('.from').val();
  var to = $('.to').val();
  $('.posts').html('');
  if(from == '' && to == ''){
    
  }else{
    $('.posts').html('');
    $.ajax({
    url:"cars2.php",
    method:"POST",
    data:{from:from , to:to},
    success:function(data){
      $('.posts').html('');
     $('.posts').html(data);

      //console.log(data);
    }
  });
  }

  
  });

</script>

</body>
</html> 

<?     mysqli_close($conn);   ?>