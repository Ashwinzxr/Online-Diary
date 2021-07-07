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
$file="login.html";
if( $passw!=$rpassw) 
{ 
        echo "password not matching"; 
} 
else 
{       
    $sq = "SELECT * FROM users where username='$usname'";
    $query = mysqli_query($conn,$sq);
    if(mysqli_num_rows($query))
    {
      echo "username is present";
    }
    else
    {  
        $in = "INSERT INTO users(email,username,password)
                VALUES ('$mail','$usname','$passw')";

        if ($conn->query($in) === FALSE) 
        {
                echo "Error: " . $in . "<br>" . $conn->error;
        }       
        else    
        {
                $sql = "CREATE TABLE $usname(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
                filen TEXT NOT NULL,
                email VARCHAR(70) NOT NULL UNIQUE        
                )"; 
                if(mysqli_query($conn, $sql)) 
                { 
                        echo "<html>";
                        echo "<a href='login.html'><button>login</button></a>";
                        //echo "<button>LOGIN</button>";
                        //echo "<html> <body><h1>ACCOUNT CREATED SUCESSFULLY</h1><br><button onclick="location.href='login.html'">LOGIN PAGE</button></body></html>"; 
                        echo "</html>";
                } 
                else 
                {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
                }  
        }
    }
        
}
$conn->close();
?>
       



