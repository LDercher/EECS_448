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

$form_contents = $_POST['post_delete'];
$number_to_delete = count($form_contents);

if($number_to_delete > 0) {
	foreach($form_contents as $post_id) {
		$query = "DELETE FROM Posts Where post_id='" . $post_id . "'";
		$mysqli->query($query);
		echo "deleted post " . $post_id;
	}
}
else {
	echo "No post selected";
}
echo "<br><br><a href='ViewUserPosts.html'>Back</a><br>";
echo "<a href='AdminHome.html'>Admin Menu</a>"; 
?>
</body>
</html>
