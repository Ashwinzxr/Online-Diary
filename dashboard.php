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
$username=$_SESSION['uname'];
$filename = "diary".date("Y-m-d").".txt";
$dof=date("y/m/d");

$diary = fopen($filename, "a");
fwrite($diary,$file);

$query= "INSERT INTO $username (filen,dof) VALUES('$filename','$dof') ";
$run=mysqli_query($conn,$query);
if(!$run)
    {
        echo mysqli_error();

    }
else
{
    echo "<html><head><link href='dash1.css' rel='stylesheet'></head><body><p>SUCESSFUL</p></body></html>";
    echo '<meta http-equiv= "refresh" content="1; url=/DIARY-/dash.html"/>';    

}    
fclose($diary);
?>


