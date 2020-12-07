<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "evelynthomas", "Aif7iY9w", "evelynthomas");
$query = "SELECT user_id FROM Users;";

if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($result = $mysqli->query($query))
{
    echo"<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> ".$row["user_id"]." </td>";
        echo "</tr>";
    }
    echo "</table>";
}
$mysqli->close();
?>
