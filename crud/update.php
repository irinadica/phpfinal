<?php
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

    
    $data = json_decode(file_get_contents("php://input"), true);
    $id=$data['id'];
    $name=$data['name'];
    $age=$data['age'];
    $city=$data['city'];

    include "connapi.php";

    $sql = "UPDATE studentdata set name='$name',age='$age',city='$city' where id='$id' ";
    $result=mysqli_query($conn,$sql);

    if(!$result)
        die ("query failed");
    else
        echo json_encode(['message'=>'Data updated succesfully','status'=>true]);

?>