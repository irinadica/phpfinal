<?php
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$un=$_POST["un"];
		$pass=$_POST["pass"];
		$repass=$_POST["repass"];

        require_once '../dbh.php';
		require_once '../function.php';

		if(emptyInputSignUp($name,$email,$un,$pass,$repass) !== false)
		{
			header('location: ../signup.php?error=emptyinput');
			exit();
		}
		if(invalidUn($un) !== false)
		{
			header('location: ../signup.php?error=invalidusername');
			exit();
		}
		// if(invalidEmail($email) !== false)
		// {
		// 	header('location: ../signup.php?error=invalidemail');
		// 	exit();
		// }
		
		if(passMatch($pass,$repass) !== false)
		{
			header('location: ../signup.php?error=passwordsdontmatch');
			exit();
		}
		if(unExists($conn,$un,$email) !== false)
		{
			header('location: ../signup.php?error=usernametaken');
			exit();
		}

		createUser($conn,$name,$email,$un,$pass);
	}
	else
	{
		header('location: ../signup.php');
	}
?>