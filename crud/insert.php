<?php
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin:*');
    
    $datai = json_decode(file_get_contents("php://input"), true);
    $namei=$datai['name'];
    $agei=$datai['age'];
    $cityi=$datai['city'];

    include "connapi.php";

    $sql = "INSERT into studentdata (name, age, city) values ('$namei', '$agei', '$cityi')";
    $result=mysqli_query($conn,$sql);

    if(!$result)
        die ("query failed");
    else
        echo json_encode(['message'=>'Data inserted succesfully','status'=>true]);

?>