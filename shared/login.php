<?php

include "connection.php";

session_start();
$_SESSION["login_status"]=false;

$query="select * from user where username='$_POST[uname]' and password=md5('$_POST[pass]')";
$result=mysqli_query($conn,"$query");

if($result->num_rows>0)
{
    $_SESSION["login_status"]=true;
    
    $dbrow=mysqli_fetch_assoc($result);
   
    
    $_SESSION["usertype"]=$dbrow['usertype'];
    $_SESSION["userid"]=$dbrow['userid'];
    $_SESSION['username']=$dbrow['username'];
    $_SESSION['prof_pho']=$dbrow['prof_pho'];
    $_SESSION['email']=$dbrow['email'];



    if($dbrow['usertype']=="Admin")
    {
        header("location:../admin/home.php");
    }
    else if($dbrow['usertype']=="user")
    {
        header("location:../user/home.php");
    }
}



?>