<?php

session_start();

if(!(isset($_SESSION["login_status"])))
{
    echo "Illegal attempt by skiping Login";
    die;
}

if($_SESSION["login_status"]==false)
{
    echo "Unauthorized Access";
    die;
}

if($_SESSION["usertype"]!="user")
{
    echo "Forbidden Access";
    die;
}

?>