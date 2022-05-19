<?php
if(isset($_POST['submit'])){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $telephone = trim($_POST['telephone']);
    $gender = trim($_POST['gender']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);
    $connection=mysqli_connect("localhost","root","","rca");
    $hashed=hash("SHA512",$password);
    if(!$connection){
        echo "Unable to connect to database";
    }
    else{
        $insertRole=mysqli_query($connection,"insert into roles(role) values('$role')");
        if($insertRole){
            echo "User Role inserted succssfully";
        }
        else{
            echo "User role not inserted";
        }
        echo "<br>";
        $query=mysqli_query($connection,"insert into users(firstName,lastName,gender,password,telephone,email,username) values('$firstName','$lastName','$gender','$hashed','$telephone','$email','$username');");
        if($query){
            echo "User Inserted successfully";
        }
        else{
                echo "Error occured in signup.";
        }
    }
}
else{
    echo "please fill out the form";
}

?>