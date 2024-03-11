<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "crudoperation";

$con = mysqli_connect($servername,$username,$password,$databasename);

if(!$con){
    die("Connection failed! ".mysqli_connect_error($con));
}
?>