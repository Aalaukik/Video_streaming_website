<?php

include "../shared/connection.php";
session_start();

$query="delete from content where con_id=$_POST[name]";

$result=mysqli_query($conn,$query);
header("location:home.php");




?>