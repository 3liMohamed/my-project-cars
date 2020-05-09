<?php

define("HOSTNAME", "localhost");
define("HOST_USER", "root");
define("HOST_PASS", "");
define("DB_NAME", "cars_project");

$conn = mysqli_connect(HOSTNAME, HOST_USER, HOST_PASS,DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>





