<?php

$db_pass="";
$db_name = "radar";
$db_user = "root";
$db_server="localhost";
$conn="";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo"you are conected";
}
else{
    echo'conection failed';
}

?>