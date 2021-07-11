<?php
$servername="localhost";
$username="root";
$password="";
$dbname="diary";

echo "<html>";
echo "<head> <link href='signup.css' rel='stylesheet'></head>";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
        die("Connection failed: " . $conn->connect_error);
}
$error = " " ; 

$usname=$_POST['username'];
$pass=$_POST['password'];

$sql= "SELECT * FROM users where username= '$usname'";
$run=mysqli_query($conn,$sql);
if (!$run) 
{
    echo "error". mysqli_error($conn);
}
else
{
    $row=mysqli_fetch_assoc($run);
    $rpass=$row['password'];
    if($rpass!=$pass)
    {
        echo "incorrect password";
    }
    else
    {
        session_start();
        $_SESSION['uname'] =$usname;
        echo '<meta http-equiv= "refresh" content="1; url=/DIARY/dash.html"/>';
    }
}
echo "</html>";
$conn->close();
?>    

