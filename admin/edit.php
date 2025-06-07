<?php

include "../shared/connection.php";
session_start();

$source=$_FILES['npimg']['tmp_name'];
$target="../user_img/".$_FILES['npimg']['name'];
move_uploaded_file($source,$target);

$query="UPDATE user SET username=$_POST[nname],email=$_POST[nemail],password=md5($_POST[npassword]),prof_pho=$target where userid=$_POST[id]";

$result=mysqli_query($conn,$query);

// header("location:det.php");


?>