<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname="rizmi";

$port=3308;

$user=$_POST['us'];
$pwd=$_POST['pw'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname,$port);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
else{

$query="INSERT INTO `test1` (`username`, `password`) VALUES ('$user', '$pwd')";

$run=mysqli_query($conn,$query);
if($run==true)
{
	
	echo "now done ";
}
else
{
	echo"<h1>this is wrong</h1>";
}
	

 echo "connected successfully" ;
}

?>