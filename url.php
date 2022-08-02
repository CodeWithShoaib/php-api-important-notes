<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database="curl";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);


     $name = $_GET['name'];
     
     $action = $_GET['action'];     
    
// for insert the data
   
    if($action == "save"){
    $price =$_GET['price'];
    $qty = $_GET['qty'];
    $sql = "INSERT INTO products ( name, price, qty) VALUES ('$name', '$price', '$qty')";
    
    $run = mysqli_query($conn,$sql);
    if($run){
        return "Record Inserted";
    }
    }


    // for showing the data
    elseif($action == "show"){
            
    $show= "SELECT * FROM products WHERE name LIKE '%$name%'";
    $showrun = mysqli_query($conn,$show);
    
  
    $data=mysqli_fetch_assoc($showrun);
    $jsonfulldata=json_encode($data);
    print_r ($jsonfulldata);
    }
//   for update


    elseif($action=="update"){
        $id =$_GET['id'];
        $name =$_GET['name'];
        $price =$_GET['price'];
        $qty = $_GET['qty'];
        $updatequery="UPDATE products SET name='$name',price= '$price',qty='$qty' WHERE id='$id'";
        $thirdquery=mysqli_query($conn,$updatequery);
        if($thirdquery){
            echo "your data is update";
        }else{
            echo "your data not update";
        }
    }
    elseif($action=="apihit"){
        function apihit(){
            $apihit="UPDATE users SET apihit";
            // $count=$apihit--;
            echo $apihit;
        }
    apihit();
    }

?>