<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	
	
    <div class="login">
		<form action="includes/login-inc.php" method="post">
			<h1>Login</h1>
			<br>
			<div class="data">
				<label for="un">Username</label>
				<input type="text" name="un" placeholder="Please insert your username"><br>
				<span id="un"></span>

				<label for="pass">Password</label>
				<input type="password" name="pass" placeholder="Please insert your password" ><br>
				<span id="un"><span>
			</div>
           <div class="php">
			<?php
					if(isset($_GET["error"]))
					{
						if($_GET["error"]== "emptyinput")
						{
							echo "<p style='font-style: italic; font-size:15px; margin-left:230px;color:red;'>Please fill in all fields!</p><br>";
						}
						else
							if($_GET["error"]== "wronglogin")
							{
								echo "<p style='font-style: italic; font-size:15px; margin-left:230px;color:red;'>Incorrect login! PLease try again.</p><br>";
							}
					}

				?>
		   </div>
		   
            <input type="submit" name="submit" value="Login" id="logbtn">
            <br>
			<div class="signup">
				<span>You don't have an account yet? Click 
					<a href="signup.php">here</a>
					 to SignUp.
				</span>
			</div>  
        </form>
	</div>

	
</body>
</html>