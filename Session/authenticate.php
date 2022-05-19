<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athentication</title>
</head>

<body><?php
        if (isset($_POST['submit'])) {
            $username = trim($_POST['username']);
            $user_password = trim($_POST['password']);
            if (($username == "") || ($user_password == "")) {
                echo  "Username and Password are required";
            } else {
                // echo $username ." ".$user_password;
                $hashed =  hash('SHA512', $user_password);
                $connection = mysqli_connect("localhost", "root", "", "rca");
                $query = "SELECT mu.userid,mu.firstName, mu.lastName,mu.gender,mu.telephone,mu.email,mu.username from users mu where mu.username='$username' and mu.password='$hashed';";
                $check = mysqli_query($connection, $query+);
                if (mysqli_num_rows($check) == 0) {
                    echo "Invalid Username and Password";
                } else {
                    while (list($userid, $firstName, $lastName, $gender, $telephone, $email, $username) = mysqli_fetch_array($check)) {
                    
              
            header("Location:home.php?name=".$firstName);
     
            }}
        }} ?>
</body>

</html>