<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBUsername, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
