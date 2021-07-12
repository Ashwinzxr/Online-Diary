<?php
session_start();
echo "<html>";
echo "<body>";
$conn=mysqli_connect("localhost","root","","diary");
if(!$conn)
{
    echo "failed";

}


$username=$_SESSION['uname'];
echo "<h1>HERE ARE YOUR FILES TO DOWNLOAD , $username</h1>";
$query = "SELECT * FROM $username";
$run = mysqli_query($conn, $query);
if(!$run)
{
    echo mysqli_error($conn);
}
echo "<div id='container'>";

    echo "<table>";
    while($row = mysqli_fetch_assoc($run)) 
    {
        echo "<tr>";
            echo "<td> {$row['id']} </td>";
            echo "<td>{$row['filen']}</td>";
            echo "<td>{$row['dof']}</td>";
            $filename = "/DIARY/Source/".$row['filen'];  
            echo '<td><a href= "'.$filename.'" target="_blank"><button id="sub">Download</button></a></td>';
        echo "</tr>";
        echo "</div>";
    } 
    echo "</table>";
    echo "</body>";
    echo "</html>";
$conn->close();
?>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <link rel="stylesheet" href="file.css"/>
</head>
<body>
    <div>

    <br>
    <button class="signout" onclick="location.href='dash.html'">GO BACK</button>
    <button class="signout" onclick="location.href='login.html'">SIGN OUT</button>
</div>
</body>
</html>
