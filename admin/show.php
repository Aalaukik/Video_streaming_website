<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("../shared/Movies-Backgrounds.jpg");
            background-repeat: no-repeat;
            background-size: cover;
                    
        }
        .sname{
            height: 300px;
            width: 900px;
            display: flex;
            flex-direction:row;
            justify-content: space-between;
            border-radius: 20px;
            color: whitesmoke;            
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            backdrop-filter: blur(8px);
            box-shadow: 5px 5px 18px rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.596);
        }
        .align{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;            
            
        }
        .vid{
            height: 300px;
            border-top-right-radius: 20px ;
        }
        .name{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            text-align: center;
            margin: 10px;

        }
            

    </style>
</head>
<body>
    
</body>
</html>
<?php

include "../shared/connection.php";

session_start();
$con_id=$_GET["con_id"];

$query=mysqli_query($conn,"select * from content where con_id=$con_id");

$dbrow=mysqli_fetch_assoc($query);
$_SESSION["con_id"]=$dbrow["con_id"];
$_SESSION["con_name"]=$dbrow["con_name"];
$_SESSION["con_type"]=$dbrow["con_type"];
$_SESSION["con"]=$dbrow["con"];

echo"
    <div class='align'>
        <div class='sname'>
            <span class='name'>$_SESSION[con_name]</span>
            
            <video class='vid' controls>
                <source src='$_SESSION[con]'>
            </video>
        </div>
        
    </div>
    
";



?>