<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diary";

echo "<html>";
echo "<head> <link href='signup.css' rel='stylesheet'></head>";

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
    $query = mysqli_query($conn,$sq) ;
    if(mysqli_num_rows($query))
    {
      echo "username is present";
      echo "<html>";
      echo "<br>";
      echo "<a href='signup.html'><button>sign up</button></a>";
      echo "</html>";
    }
    else
    {  
        $squ="SELECT * FROM users where email='$mail'";
        $qury= mysqli_query($conn,$squ);
        if(mysqli_num_rows($qury))
        {
                echo "email is present";
                echo "<html>";
                echo "<br>";
                echo "<a href='signup.html' ><button class='btn'>SIGN UP</button></a>";
                echo "</html>";
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
                        dof VARCHAR(70) NOT NULL        
                        )"; 
                        if(mysqli_query($conn, $sql)) 
                        { 
                                echo "<html>";
                                echo "<a href='login.html'><button class='btn'>LOG IN</button></a>";
                                echo "</html>";
                        } 
                        else 
                        {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
                        }  
                }
        }       
}
echo "</html>"    ;    
}
$conn->close();
?>



