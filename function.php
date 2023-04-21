<?php

function emptyInputSignUp($name,$email,$un,$pass,$repass)
{
    $result;
    if(empty($name) || empty($email) || empty($un) || empty($pass) || empty($repass))
    {
        $result= true;
    }
    else
        $result= false;
    return $result;
}

function invalidUn($un)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $un))
    {
        $result= true;
    }
    else
        $result= false;
    return $result;
}

// function invalidEmail($email)
// {
//     $result;
//     if(filter_var($email, FILTER_VALIDATE_EMAIL))
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
//}
function passMatch($pass,$repass)
{
    $result;
    if($pass !== $repass)
    {
        $result= true;
    }
    else
        $result= false;
    return $result;
}

function unExists($conn,$un,$email)
{
   $sql="SELECT * FROM users WHERE usersUd=? OR usersEmail=?;";
   $stmt= mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql))
   {
    header('location: ../signup.php?error=stmtfailed');
    exit();
   }
   mysqli_stmt_bind_param($stmt,"ss",$un,$email);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultData))
   {
        return $row;
   }
   else
   {
        $result= false;
        return $result;
   }
   mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$un,$pass)
{
   $sql="INSERT INTO users (usersName, usersEmail, usersUd, usersPass) VALUES (?,?,?,?);";
   $stmt= mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql))
   {
    header('location: ../signup.php?error=stmtfailed');
    exit();
   }

   $hashPass=password_hash($pass, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$un,$hashPass);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header('location: ../signup.php?error=none');
    exit();
}

function emptyInputLogin($un,$pass)
{
    $result;
    if(empty($un) || empty($pass))
    {
        $result= true;
    }
    else
        $result= false;
    return $result;
}
   
function loginUser($conn,$un,$pass)
{
    $unExists=unExists($conn,$un,$un);

    if($unExists== false)
    {
        header('location: ../login.php?error=wronglogin');
        exit();
    }

    $passHash=$unExists["usersPass"];
    $checkpass=password_verify($pass,$passHash);

    if($checkpass=== false)
    {
        header('location: ../login.php?error=wronglogin');
        exit();
    }
    else
        if($checkpass=== true)
        {
            session_start();
            $_SESSION["userid"]=$unExists["usersId"];
            $_SESSION["userud"]=$unExists["usersUd"];
            header('location: ../include.php');
            exit();
        }
    
}