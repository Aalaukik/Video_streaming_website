
<?php

session_start();

$source=$_FILES['cimg']['tmp_name'];
$target="../shared/upload_img/".$_FILES['cimg']['name'];
move_uploaded_file($source,$target);

include "../shared/connection.php";

mysqli_query($conn,"insert into content(con_name,genre,run_time,description,con_img) values ('$_POST[cname]','$_POST[cgenre]','$_POST[cruntime]','$_POST[cdes]','$target')");

header("location:home.php");


?>