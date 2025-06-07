<?php

include "../shared/connection.php";
session_start();

$source=$_FILES['nimg']['tmp_name'];
$target="../shared/upload_img/".$_FILES['nimg']['name'];
move_uploaded_file($source,$target);

$query="UPDATE content SET con_name=$_POST[nname],run_time=$_POST[nruntime],genre=$_POST[ngenre],description=$_POST[ndes],con_img=$target where con_name=$_POST[pname]";

$result=mysqli_query($conn,$query);

header("location:home.php");


?>