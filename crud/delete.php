<?php
    header('Content-Type:application/json');
    header('Access-control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:DELETE');  
    header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');
 
    $data=json_decode(file_get_contents("php://input"),true);
    $name=$data['name'];

    include "connapi.php";

    $sql="DELETE FROM studentdata WHERE name='$name'";

    
    if(mysqli_query($conn,$sql))
    {
    echo json_encode(array("message"=>"Delete sucessfully","status"=>true));
    }
    else
    {
        echo json_encode(array("message"=>"not deleted","status"=>false));
    }
?>
