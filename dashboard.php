<?php

session_start();
$conn = mysqli_connect("localhost","root","","diary");

if(!$conn)
{
    echo "failed";

}


$file=$_POST['inp'];
$fname=$_POST['fn'];
$username=$_SESSION['uname'];
$filename = "$fname.txt";
$path="source/".$filename;
$dof=date("y/m/d");
$diary = fopen($path, "a");
fwrite($diary,$file);

$query= "INSERT INTO $username (filen,dof) VALUES('$filename','$dof') ";
$run=mysqli_query($conn,$query);
if(!$run)
    {
        echo "error";

    }
else
{
    echo "<html><head><link href='dash1.css' rel='stylesheet'></head><body><p>File Inserted Successfully</p></body></html>";
    echo '<meta http-equiv= "refresh" content="1; url=/DIARY/dash.html"/>';    

}    
fclose($diary);
$conn->close();
?>


