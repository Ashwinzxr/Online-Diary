<?php

session_start();
$conn = mysqli_connect("localhost","root","","diary");

if(!$conn)
{
    echo "failed";

}

//error reporting 
ini_set ("display_errors", "1");
error_reporting(E_ALL);

$file=$_POST['inp'];

