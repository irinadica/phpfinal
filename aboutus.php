<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/h&f.css">
    <style>
        *{
            margin: 0px;
            box-sizing: border-box;
        }
        th,td{
            border: 2px solid pink;
        }
        #all{
            width: 500px;
            margin: auto;
        }
        #searchf{
            width: 500px;
            margin: auto;
        }
        #insert{
            width: 500px;
            display: flex;
            flex-direction: column;
            margin: auto;
        }
        #delete{
            width: 500px;
            /* display: flex;
            flex-direction: column; */
            margin: auto;
        }
        #update{
            width: 500px;
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 15px;
            
        }
        
        .main{
            background-image: url(https://images.unsplash.com/photo-1629053800620-4584e836b3bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGJsYWNrJTIwYW5kJTIwd2hpdGUlMjB0ZXh0dXJlfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60);

            margin: auto;
            border: 2px solid #DFA67B;
            width: 700px;
            /* padding: 20px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #F4B183;
        }
        h1{
            
            width:697px;
            height: 70px;
            margin: auto;
            text-align: center;
            padding: 15px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php

        include "top.php"
    ?>
    <div class="main">
        <h1>CRUD methods</h1>
        <br>
        <form id="all" action="" method="">
            <h2>Click the button below to display all the data.</h2>
            <button id="btnall">Fetch data</button>
            <table id="para"></table>
        </form>
         <script src="js/fetchdata.js"></script>
        <br><br><br>
        <form id="searchf" action="" method="">
            <h2>Look for data based on the city:</h2>
            Search:<input type="text" id="search" name="search">
            <button id="btns">search</button>
            <table id="spans"></table>
        </form>
        <script src="js/search.js"></script>
        <br><br><br>
        <form id="insert" action="" method="">
            <h2>Insert your data below to add you in the system.</h2>
            Name:<input type="text" id="namei" name="namei">
            Age:<input type="text" id="agei" name="agei">
            City:<input type="text" id="cityi" name="cityi">
            <br>
            <button id="btni">Insert</button>
            <span id="spani"></span>
        </form>
        <script src="js/insert.js"></script>
        <br><br><br>
        <form id="delete" action="" method="">
            <h2>If you insert a wrong data you can just write the name and delete it.</h2>
            Name:<input type="text" id="named" name="named">
            <button id="btnd">Delete</button>
            <span id="spand"></span>
        </form>
        <script src="js/delete.js"></script>
        <br><br><br>
        <form id="update" action="" method="">
            <h2>If you want to update your data, insert it below.</h2>
            Id:<input type="text" id="idu" name="idu">
            Name:<input type="text" id="nameu" name="nameu">
            Age:<input type="text" id="ageu" name="ageu">
            City:<input type="text" id="cityu" name="cityu">
            <br>
            <button id="btnu">Update</button>
            <span id="spanu"></span>
        </form>
        <script src="js/update.js"></script>
    </div>
    
<br><br>

    <?php
        include "bottom.php"
    ?>
</body>
</html>