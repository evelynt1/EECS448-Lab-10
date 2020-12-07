<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "evelynthomas", "Aif7iY9w", "evelynthomas");
if($mysqli->connect_errno)
{
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
}
$name = $_POST["name"];
$query = "SELECT content FROM Posts WHERE author_id='".$name."'";
if($result = $mysqli->query($query))
{
    echo"<h1>Admin</h1>";
    echo"<table>";
    echo"<th> User [".$name."] Post</th>";

    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td> ".$row["content"]." </td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "Post is empty";
}
$mysqli->close();
?>