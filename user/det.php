<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("../shared/Movies-Backgrounds.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            display: flex;
            flex-direction: column;
            justify-content:space-evenly;
            align-items:center;
            position: absolute;
            left: 50%;
            top: 50%;
            translate: -50% -50%;            
            height: 600px;
            width: 450px;
            border-radius: 20px;
            text-align: center;
            color: whitesmoke;            
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            backdrop-filter: blur(8px);
            box-shadow: 5px 5px 18px rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.596);

            
        }
        .himg{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            margin: 20px;
        }
        .det{
            /* border:solid 2px white; */
            height: 110px;
            width:380px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .button{
            height: 50px;
            width: 75%;                
            border-radius: 10px;           
            color: black;
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .tps{
            border-bottom:1px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            padding: 0px 0px 0px 8px ;
            background-color: transparent;
            color: white;
            font-size:large;
            height: 100%;
            width: 75%;
            display: flex;
            justify-content: baseline;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php

include "../shared/connection.php";
session_start();
echo"<div class='card'>
        <img class='himg' src='$_SESSION[prof_pho]'>
        <div class='det'>
            <h2 class='tps'>Name: $_SESSION[username]</h2>
            <h2 class='tps'>Email: $_SESSION[email]</h2>   
        </div>
        <a class='button' href='Edit.html'>Edit profile</a>
            

    </div>";

?>