<?php
if (isset($_POST['Change'])) {

   $userid = $_POST['userid'];
   $password = trim($_POST['password']);
   $newPassword = $_POST['newpassword'];
   $connection = mysqli_connect("localhost", "root", "", "rca");
   $confirmedNewPassword = $_POST['cpassword'];
   if (!($newPassword == $confirmedNewPassword)) {
      echo " Please confirm the new Password";
   } else {
      $hashed = hash('SHA512', $password);
      $query = "SELECT * from users WHERE userid='$userid' and password='$hashed';";
      $exe = mysqli_query($connection, $query);
      if (mysqli_num_rows($exe) == 0) {
         echo " The Current Password is wrong";
      } else {
         $hashed = hash("SHA512", $newPassword);
         $updateQuery = "update users set password='$hashed' WHERE userid='$userid'";
         $execute = mysqli_query($connection, $updateQuery);
         if ($execute) {
            echo "Changed succesfully";
         }
      }
   }
} else {
   echo "Please fill out the change password form";
}
