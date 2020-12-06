<?php

$name=$_POST["name"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "evelynthomas", "Aif7iY9w", "evelynthomas");

if($mysqli->connect_errno)
{
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
}

if($name == " ")
{
        echo "Please enter text";
}
else
{
        $query = "INSERT INTO Users (user_id) VALUES ('".$name."')";
        if($mysqli->query($query))
        {
                echo "[".$name."] stored successfully";
        }
        else
        {
                echo "User already exists";
        }
}

$mysqli->close();
?>
