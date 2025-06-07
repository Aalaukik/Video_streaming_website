<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("../shared/Movies-Backgrounds.jpg");
            background-repeat: no-repeat;
            background-size: cover;
                    
        }
            
        .header{
            position: sticky;
            top: 0;
            height: 100px;
            display: flex;
            align-items:center;
            border-radius:10px ;
            box-shadow: 5px 5px 18px rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.596);
            justify-content: space-between;
                        
        }
        .navbar{
            width: 300px;
            padding: 10px;
            display: flex;
            justify-content: space-evenly; 
            border-right-color: white;   
            border: 10px; 
            transform: translateX(-340px);
        }
       
        .himg{
            padding: 10px;
            height: 70px ;
            width: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
        }
        .bot{
            
            height: 30px;
            width: 80px;
            border-bottom:1px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            background-color: transparent;
            color: white;
            font-size: medium;
            text-align: center;
        }
        
        .card{
            display: inline-block;            
            
            border-radius: 15px;
            height: 400px;
            width: 250px;
            vertical-align: top;
            margin: 20px;            
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: whitesmoke;
            position: relative;
            /* overflow: hidden; */
            
        }

        .img{
            height: 100%;
            width: 250px;
            border-radius: 15px;
            
            
        }
        .button{
            margin: 5px; 
            width: 100px;                  
            height: 30px; 
            border-radius: 10px;
            border: #ff9a44;
            color: black;
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateX(-30px);
            box-shadow: 5px 5px 18px rgb(0, 0, 0);
        }
        
        .content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);

        }
        .details{
            background-color: transparent;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
            backdrop-filter: blur(1px);

        }
        .text{
            color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;

        }
        .headline{
            font-size: 25px;
            font-weight: bold;            
            text-shadow: 5px 5px 18px rgb(255,255,255);
            transform: translateY(115px);
            background-color: rgba(0, 0, 0, 0.596);
            width: fit-content;
            padding: 5px;
            border-radius: 10px;
        }
        .paragraph{
            background-color: rgba(255,255,255,0.596);
            color: black;
            width: 90%;
            height: 100px;
            box-sizing: border-box;
            padding: 7px;
            border-radius: 8px;
            transform: translateY(20px);
            overflow: hidden;
        }
        .gen{
            transform: translate(-55px,90px);
            background-color: rgba(0, 0, 0, 0.596);
            width: fit-content;
            padding: 5px;
            border-radius: 5px;
        }
        .button2{
            transform: translate(70px,60px);
            color: black;
            width: 60px;  
            text-align: center;   
            padding-bottom: 2px;
            border-radius: 6px; 
            text-decoration: none;  
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%); 
               
        }



    </style>
</head>
<body>    
</body>
</html>
<?php

include "../shared/connection.php";

$result=$result=mysqli_query($conn,"select * from user");
$dbrow=mysqli_fetch_assoc($result);

echo "
    <header class='header'>
         <div>
            <a href='det.php'>
                <img class='himg'  src='$dbrow[prof_pho]' >
            </a>
        </div>
        <div class='navbar'>
            <a href='home.php'>
                <button class='bot'>Home</button> 
            </a>
                                 
        </div> 
        <a href='logout.php'>
                <button class='button'>Logout</button>
        </a>
           
    </header>";

$result1=mysqli_query($conn,"select * from content");
while($asd=mysqli_fetch_assoc($result1))
{
    echo"
        
            <div class='card'>
                <div class='content'>
                    <img class='img' src='$asd[con_img]'> 
                    <div class='details'>  
                                               
                        <span class='text headline'>$asd[con_name]</span>
                        <span class='text gen'>$asd[genre]</span>
                        <a class='button2' href='show.php?con_id=$asd[con_id]'>Play</a>
                        <p class='text paragraph' >$asd[description]</p>
                    </div>
                </div>              
            </div>
";
}
?>