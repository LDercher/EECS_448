
<HTML>
  <HEAD>
    <TITLE>View Users</TITLE>
  </HEAD>
  <BODY>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "psundara", "sripassword", "psundara");

/* check connection */
if ($mysqli->connect_errno) 
{
    die("Connection failed: " . $mysqli->connect_error);

}

$sql = "SELECT user_id FROM Users";
$result = $mysqli->query($sql);
if($result ->num_rows>0)
{
	while($row = $result ->fetch_assoc())
	{
		echo "<br> User id: " . $row["user_id"] . "<br>";
	}
}
else
{
	echo "no results";
}

echo "<br><a href='AdminHome.html'>Admin Menu</a>";
?>
</body>
</html>