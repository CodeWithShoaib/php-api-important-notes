<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database="curl";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// select query
$select="SELECT  apihit FROM users WHERE name='mobeen'";
$firstquery=mysqli_query($conn,$select);
$fetchdata=mysqli_fetch_assoc($firstquery);
$remaining = $fetchdata['apihit'] - 1;
if($remaining<0){
    echo "you fulfil your visit chance";
}else{
    echo $remaining;
    // update query
    $update="UPDATE users SET  apihit= $remaining WHERE name='mobeen'";
    $secondquery=mysqli_query($conn,$update);
}





?>