<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "evelynthomas", "Aif7iY9w", "evelynthomas");
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$delete = $_POST["delete"];
$query = "SELECT post_id FROM Posts";
foreach ($delete as $postid)
{
    $sql = "DELETE FROM Posts WHERE post_id = '$postid'";
    if($result = $mysqli->query($sql))
    {
        echo "The Post ID: ".$postid." is deleted.<br>";
    }
    else
    {
        echo "The Post ID: ".$postid."delete failed";
    }
}
/* close connection */
$mysqli->close();
?>