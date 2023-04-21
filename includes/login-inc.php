<?php

if(isset($_POST['submit']))
{
    $un=$_POST['un'];
    $pass=$_POST['pass'];

    require_once "../dbh.php";
    require_once "../function.php";

    if(emptyInputLogin($un,$pass) !== false)
		{
			header('location: ../login.php?error=emptyinput');
      echo "fill in all the fields! ";
			exit();
		}

    loginUser($conn,$un,$pass);
    
}
else
   {
        header("location: ../login.php");
        exit();
   }

?>