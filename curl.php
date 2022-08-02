<?php 

function getUrl($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}   

$array = array(
array("name"=>"Product","price"=>"1200","qty"=>"100"),
array("name"=>"Product","price"=>"700","qty"=>"100"),
array("name"=>"Product","price"=>"800","qty"=>"100"),
array("name"=>"Product","price"=>"","qty"=>"100"),
array("name"=>"Product","price"=>"1100","qty"=>"100"),
array("name"=>"Product","price"=>"","qty"=>"100"),
array("name"=>"Product","price"=>"200","qty"=>"100"),
array("name"=>"Product","price"=>"","qty"=>"100")
);


function makediff($num1){
    $d=1200-$num1;
    $result= $d+$num1;
    return $result;
}   


for($x=0; $x<count($array); $x++){
    if($array[$x]['price']==null){
       continue;
    }else{
        $price = makediff($array[$x]['price']);    
        $url = "http://localhost/shoaib/ajax/url.php?name=".$array[$x]['name']."&price=".$price."&qty=".$array[$x]['qty'];
        getUrl($url);
      
    }
        
    }
    
 

    
?>  