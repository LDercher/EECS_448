<?php

 $user= $_POST['user'];
 $post = $_POST['post'];
 $validName ="";

$mysqli = new mysqli("mysql.eecs.ku.edu", "ldercher", "Sasquatch66", "ldercher");


if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


if ($user == "")
{
      echo "Username is empty";
}
else if ($post == "")
{
    echo "posts is empty.";
}
 else
{
    $query = "SELECT user_id FROM Users WHERE user_id = '$user'";
    $result = $mysqli->query($query);
    $num = mysqli_num_rows($result);
    //check for username in Users
    /*
    if($result = $mysqli->query($query))
    {
        while($check = $result->fetch_assoc())
        {
            $validName = $check['user_id'];

        }
    } */
    if ($num > 0)
    {
        $insert = "INSERT INTO Posts (content, author_id) VALUES ('$post','$user')";

        if($checkThis = $mysqli->query($insert))
        {
            echo $user. " your post was successful";
        }
        else
        {
            echo "oops, something went wrong";
        }

     }
     else
     {
        echo "I cannot save this post. This username does not exist.";
     }
}

echo "<br><a href='AdminHome.html'>Admin Menu</a>";


?>
