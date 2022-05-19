<?php

$id=$_GET["id"];

$conn=mysqli_connect("localhost","root","","rca");
$sql = "DELETE FROM mis_users WHERE id=$id";
mysqli_query($conn,$sql);


echo "<br><a href=process.php>view data</a>";
?>
