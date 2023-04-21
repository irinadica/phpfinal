<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/h&f.css">
</head>
<body>
 
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        
        <?php
            if(isset($_SESSION["userud"]))
            {
                echo "<li><a href='profile.php'>Profie Page</a></li>";
                echo "<li><a href='includes/logout.php'>Log out</a></li>";
            }
            else
            {
                echo "<li><a href='signup.php'>Sign Up</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
            }
        ?>        
    </ul>
        <div class="heading">
            <h1>Introductory heading</h1>
            <p>This is an introductory paragraph for this page </p>
        </div>
        <br>
</body>
</html>