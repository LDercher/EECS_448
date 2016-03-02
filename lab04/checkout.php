<?php
 $username = $_POST['userName'];
 $password = $_POST['passWord'];
 $BatG = $_POST['BatG'];
 $RadG = $_POST['RadG'];
 $BoneG = $_POST['BoneG'];
 $shipping = $_POST['shipping'];
 $label = '';
 $shcost = 0;
 if($shipping == 1)
 {
   $label = "7 day";
   $shcost = 0;
 }
 else if($shipping == 2)
 {
   $label = "Over night";
   $shcost = 50;
 }
 else {
   $label = "3 Day";
   $shcost = 5;
 }

 echo "<html><head><title>Receipt</title><link rel='stylesheet' type='text/css' href='style.css'></head><body>";
 echo "<h1>Receipt</h1>";
 echo "Username: " . $username . "<br>";
 echo "Password: " . $password . "<br>";
 echo "<table style='width:auto'>";
 echo "<tr><td></td>";
 echo "<td>Quantity</td>";
 echo "<td>Cost Per Item</td>";
 echo "<td>Sub Total</td></tr>";

 echo "<tr><td>Bat Guitar</td>";
 echo "<td>" . $BatG . "</td>";
 echo "<td>$499.99</td>";
 echo "<td>$". $BatG*499.99 ."</td>";

 echo "<tr><td>Radical Guitar</td>";
 echo "<td>" . $RadG . "</td>";
 echo "<td>$599.99</td>";
 echo "<td>$" . $RadG*599.99 . "</td>";

 echo "<tr><td>Bone Guitar</td>";
 echo "<td>" . $BoneG . "</td>";
 echo "<td>$699.99</td>";
 echo "<td>$" . $BoneG*699.99 . "</td>";

 echo "<tr><td colspan='2'>Shipping</td>";
 echo "<td>" . $label . "</td>";
 echo "<td>$" . $shcost . "</td>";

 $total = $BatG*499.99 + $RadG*599.99 + $BoneG*699.99 + $shcost;

 echo "<tr><td colspan='3' >Total Cost</td>";
 echo "<td>$" . $total . "</td></tr>";
 echo "</table>";
echo "</body></html>";

 ?>
