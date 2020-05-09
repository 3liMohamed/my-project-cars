<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
    @import url('images/002.jpg');
    html,
    body {
        background-image: url('images/002.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
</style>
    <meta charset="utf-8">
    <title>Home Page</title>



    <link rel="stylesheet" href="/cars_project/css/bootstrap.min.css">
    <!-- <script src="/cars_project/js/ie-emulation-modes-warning.js"></script> -->

</head>
<body>

<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <!-- <li class="active"><a href="profile.html">Home</a></li> -->
            
          </ul>
          <?php
          if(isset($_SESSION['username'])){?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Sale.php"><?php echo $_SESSION['username']; ?></a></li>
            <li id="logout"><a href="logout.php">logout</a></li> 
            <li><a href="profile.php">New Post</a></li> 
          </ul>
         <?php }else{?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Login.html">Login</a></li>
            <li><a href="new_account.html">Create Account</a></li> 
          </ul>
          <?php
         }
          ?>

          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    

</body>
</html>