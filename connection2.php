<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname="rizmi";

$port=3308;


// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname,$port);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
else{

 echo "connected successfully" ;
}

?>