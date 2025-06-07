<?php

$conn = new mysqli("localhost", "root", "", "project2");
mysqli_query($conn,"insert into user(username,password,email) values ('$_POST[username]',md5('$_POST[password1]'),'$_POST[email]')");
header("location:login.html");

?>
