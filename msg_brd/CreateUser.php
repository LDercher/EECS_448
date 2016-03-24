<?php

 $user = $_POST['user'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "ldercher", "Sasquatch66", "ldercher");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sql = "INSERT INTO Users (user_id) VALUES ('$user')";

if ($result = $mysqli->query($sql))
{
	echo "New record created successfully";
  echo "<br><a href='AdminHome.html'>Admin Menu</a>";
    $result->free();
}
else
{
	echo "Error: " . $sql . "<br>" . $mysqli->error;
  echo "<br><a href='AdminHome.html'>Admin Menu</a>";
}


$mysqli->close();

?>
