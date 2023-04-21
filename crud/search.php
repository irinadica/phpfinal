<?php
    header('Content-Type:application/json');
    header('Access-control-Allow-Origin:*');
      
 
    $data=json_decode(file_get_contents("php://input"),true);
    $search=$data['search'];

    include "connapi.php";

    $sql="SELECT * FROM studentdata WHERE city like '%$search%'";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        $data=mysqli_fetch_all(mysqli_query($conn,$sql),MYSQLI_ASSOC);
        echo json_encode($data);
    }
    else
    {
        echo json_encode(array("message"=>"no data founded","status"=>false));
    }
?>
