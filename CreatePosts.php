<?php
$username = $_POST['username'];
$post = $_POST['post'];
$name = $_POST["name"];
$post = $_POST["post"];
$userExist = false;
$mysqli = new mysqli("mysql.eecs.ku.edu", "evelynthomas", "Aif7iY9w", "evelynthomas");
$query = "SELECT user_id FROM Users;";

if($mysqli->connect_errno)
{
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
}
if ($result = $mysqli->query($query)) 
{
    while ($row = $result->fetch_assoc()) 
    {
        if($row["user_id"] == $name)
        {
            $userExist = true;
        }
    }
    if($userExist == false)
    {
        echo "User id doesn't exist, please use correct id";
    }
    else if($post == "")
    {
        echo "Post failed, please Post text in the box";
    }
    else
    {
        $sql = "INSERT INTO Posts (content, author_id) VALUES ('$post' , '$name')";
        if($mysqli -> query($sql)) 
        {
            echo "Add post successfully<br>";
        }
        else
        {
            echo "failed<br>";
        }
        $result->free();
    }

    $mysqli->close();
?>

