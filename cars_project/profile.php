<?php session_start(); ?>
<?php 

if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>

<head>
    <title>profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Style inputs */
        
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
        
        body {
            font-family: Verdana, sans-serif;
            margin: 0
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
        
        html,
        body {
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
</head>

<body>

    <div class="icon-bar">
        <a href="home.php"><i class="fa fa-home"></i></a>
        <a href="Login.html"><i class="fa fa-fw fa-user"></i>Login</a>
        <a href="new_account.html"><i class="fa fa-fw fa-user"></i></a>
        <a href="https://demo.tutorialzine.com/2010/10/ajax-web-chat-jquery-css3/ajax-chat.html"><i
        class="fa fa-envelope"></i></a>
        <a href="Sale.html"><i class="fa fa-car"></i></a>
        <a class="active" href="profile.html">profile</a class="active">
        <div class="topnav">


        </div>
    </div>
    <div class="column">
        <form action="new.php" method="POST" enctype="multipart/form-data">
            <label>Name Advertising</label>
            <input type="text" id="name" name="name" placeholder="Your name Advertising..">

            <label>Address</label>
            <input type="text" id="address" name="address" placeholder="Address">

            <label>City</label>
            <input type="text" id="city" name="city" placeholder="City">


            <label>Model</label>
            <input type="text" id="model" name="model" placeholder="Model">


            <label for="phone">Phone Advertiser</label><br><br>
            <input type="tel" name="phone" id="phone" placeholder="Your phone Advertiser .." maxlength="11" required><br><br>


            <label>Price</label><br><br>
            <input type="number" id="price" name="price" placeholder="Price" pattern="[0-9]{7}" required><br><br>

            <label for="subject">Subject</label>
            <textarea id="subject" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            
            <input type="file" name="image" id="image"/>
                <br />
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
        </form>


    </div>


    
    <script src="jquery-3.4.1.min.js"></script>



</body>

</html>

<?php 
}else{
    echo "<script>location.href='Login.html'</script>";
}

?>