<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diary";

$conn = NEW mysqli($servername, $username, $password, $dbname);
// Checking connection
if ($conn->connect_error) 
{
        die("Connection failed: " . $conn->connect_error);
}
$error = " " ; 
$mail=$_POST["email"]; 
$usname=$_POST["uname"]; 
$passw=$_POST["pass"]; 
$rpassw=$_POST["rpass"]; 
if( $passw!=$rpassw) 
{ 
        echo "password not matching"; 
} 
else 
{ 
        $sql = "CREATE TABLE $usname 
        ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        email VARCHAR(70) NOT NULL UNIQUE, fname TEXT NOT NULL 
        )"; 
        if(mysqli_query($conn, $sql)) 
        { 
                echo "Table created successfully."; 
        } 
        else 
        {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
        } 
}
?>


