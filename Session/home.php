<?php

echo "Welcome ".$_GET['name']."<br>";
echo ('<a href="changepassword.php?userid=<?= $userid ?>">Change Password</a>');

?>