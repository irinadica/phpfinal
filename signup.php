<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="register">
        
		<form action="includes/signup-inc.php" method="post">
			<h1>Sign Up</h1>
			<div class="data">
				Full Name: <input type="text" name="name"> <br>
				Email: <input type="email" name="email"> <br>
				Username: <input type="text" name="un"> <br>
				Password: <input type="password" name="pass"><br>
				Repeat Password: <input type="password" name="repass"><br>
			</div>
			<?php
	if(isset($_GET["error"]))
	{
		if($_GET["error"]== "emptyinput")
		{
			echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Please fill in all fields!</p><br>";
		}
		else
			if($_GET["error"]== "invalidun")
			{
				echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Choose a valid username!</p><br>";
			}
			else
				if($_GET["error"]== "invalidemail")
				{
					echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Choose a valid email!</p><br>";
				}
				else
					if($_GET["error"]== "passwordsdontmatch")
					{
						echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Passwords don't match. Please try again!</p><br>";
					}
					else
						if($_GET["error"]== "stmtfailed")
						{
							echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Something went wrong, try again!</p><br>";
						}
						else
							if($_GET["error"]== "usernametaken")
							{
								echo "<p style='font-style: italic; font-size:15px; margin-left:280px;color:red;'>Choose another username</p><br>";
							}
							else
								if($_GET["error"]== "none")
								{
									echo "<p style='font-style: italic; font-size:15px; margin-left:250px;color:red;'>You have signed up!</p><br>";
								}
	}
?>
			<button type="submit" name="submit" id="signbtn">Sign Up</button>
			<br>
			<div class="login">
				<span>Already have an account? Click <a href="login.php">here</a>
					to sign in.
				</span>
				<br>
			</div>
        </form>
</div>

</body>
</html>