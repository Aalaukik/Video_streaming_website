<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            
        .header{
            position: sticky;
            top: 0;
            height: 100px;
            background-color: royalblue;
            display: flex;
            align-items:center;
            border-radius:10px ;
                        
        }
        .navbar{
            width: 650px;
            padding: 10px;
            display: flex;
            justify-content: space-evenly; 
            border-right-color: white;   
            border: 10px; 
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
            position: relative;
            height: 30px;
            width: 80px;
            border-radius: 8px;
            border-color: royalblue;
            border: 10px;
            
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
            <a href=''>
                <button class='bot'>Movies</button>
            </a>
            <a href=''>
                <button class='bot'>TV shows</button>
            </a>
            <a href=''>
                <button class='bot'>Anime</button>
            </a>
        </div>
    </header>";

    


?>
