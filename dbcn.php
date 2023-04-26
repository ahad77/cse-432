<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_req";
$con= mysqli_connect($hostname,$username,$password,$dbname);
if (!$con){
    die("Error".mysqli_connect_error() );
}


?>