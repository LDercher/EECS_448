<HTML>
  <HEAD>
    <TITLE>View User Posts</TITLE>
  </HEAD>
  <BODY>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "ldercher", "Sasquatch66", "ldercher");

if ($mysqli->connect_errno) {
    $error = $mysqldatabase->connect_error;
    $message = "Connect failed: " . $error;
    exit();
}

error_reporting(E_ALL);
    ini_set("display_errors", 1);

$author =  $_POST['username'];
$num_posts = 0;

$result = $mysqli->query("SELECT post_id, content FROM Posts Where author_id='" . $author . "'");
$array = mysqli_fetch_all($result, MYSQLI_NUM);
$num_posts = mysqli_num_rows($result);
if($num_posts > 0) {
  echo "<h2>Posts by " . $author . "</h2>";
  echo "<table align='left'>";
  echo "<tr style='border: 1px solid gray;text-align: center;'>";
        echo "<th >Post ID</th>";
        echo "<th>Post Content</th>";
  foreach($array as $row) {
    echo "<tr style='border: 2px solid black;text-align: center;'>";
    foreach($row as $post) {

        echo "<td class='headers' style='border: 1px solid gray;'>" . $post . "</td>";
    }
    echo "</tr>";
  }
  echo "</table><br><br>";
}
else {
  echo "Users table empty!\n";
}
echo "<br><br><a href='ViewUserPosts.html'>Back</a><br>";
echo "<a href='AdminHome.html'>Admin Menu</a>";
?>
</body>
</html>
