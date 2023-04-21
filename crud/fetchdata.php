<?php
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:GET');
    header('Access-Control-Allow-Headers:"Contect-Type","Access-Control-Allow-Origin","Access-Control-Allow-Methods"');
    
    include "connapi.php";
    
    $sql="SELECT * FROM studentdata";
    $result=mysqli_query($conn,$sql);

    if(!$result)
        die ("query failed");
    else
    {
        if(mysqli_num_rows($result)>0)
        {
            $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
            echo json_encode($output);
        }

        else
        {
            echo json_encode(array('message'=>'no record found','status'=>false));
        }
    }

?>