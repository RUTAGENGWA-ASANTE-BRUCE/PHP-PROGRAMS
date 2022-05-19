<?php


// if(isset($_POST['submit'])){
// $firstName=$_POST['firstName'];
// $lastName=$_POST['lastName'];
// $telephone=$_POST['telephone'];
// $gender=$_POST['gender'];
// $nationality=$_POST['nationality'];
// $username=$_POST['userName'];
// $email = $_POST['email'];
// $password=$_POST['password'];
// $cpassword=$_POST['cpassword'];
// $condition=$_POST['userRow'];
// $encrypted=hash("md5",$password);


// $DB_server = "localhost";
// $DB_name = "rca";
// $DB_user_name = "root";
// $DB_user_password = "bruce";
$conn= mysqli_connect("localhost","root","","rca");
$id= $_GET['id'];
echo $id;
if(!$conn){
    echo mysqli_connect_error();

}
else{ 
    
    
    $sql="SELECT * from mis_users where id=$id";
    $addQuery=mysqli_query($conn,$sql);

    if($addQuery){
        $count=mysqli_num_rows($addQuery);
        if($count>0){
            while($rows=mysqli_fetch_assoc($addQuery)){

        
                
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            th{
            color: red;
            }
    </style>
</head>

<body>
    <div
        style="background-color: blue;  width: 550px; border-radius: 8px; height: 500px; padding-top: 5px; padding-right: 20px; padding-bottom: 45px; margin-left: 500px ; margin-top: 50px;">
        <div
            style="background-color: whitesmoke; margin-left: 30px; width: 500px;  border-radius: 8px; margin-top: 5px; text-align: center; padding-bottom: 10px;">
            <h1 style="font-weight: bold; margin-left: 60px;">Update account</h1>
            <form style="display: flex; flex-direction: column;" action="#" method="POST">
                <label style="margin-top: 5px;">First Name<input style="margin-left: 60px; border-radius: 3px; "
                        type="text" placeholder="Enter First Name" name="firstName" id="fName" value="<?php echo $rows['firstName'] ?>"></label><br>
                <label style="margin-top: 5px;">Last Name<input style="margin-left: 61px; border-radius: 3px;"
                        type="text" placeholder="Enter Last Name" name="lastName" id="lName" value="<?php echo $rows['lastName'] ?>"></label><br>
                <label style="margin-top: 5px;">Email<input style="margin-left: 92px; border-radius: 3px;" type="email"
                        placeholder="Enter Your Email" name="email" value="<?php echo $rows['email'] ?>"></label><br>
                <label style="margin-top: 5px;">Telephone<input style="margin-left: 63px; border-radius: 3px;"
                        type="tel" placeholder="Enter Telephone Number" name="telephone" id="tell" value="<?php echo $rows['telephone'] ?>"></label><br>
                <label style="display: flex; flex-direction: row;margin-left: 98px; ">Gender
                
                <div style="display: flex; flex-direction: row; margin-left: 80px; border-radius: 3px;">
                 <?php
                
                        
                        if($rows['gender']=='male'){
                            ?>
                        <input type="radio" name="gender" id="male" value="male" checked>Male
                        <input style="margin-left: 60px; border-radius: 3px;"
                             
                             type="radio" name="gender" id="female" value="female" checked >Female
                             <?php
                 }else{
                             ?>
                             <input type="radio" name="gender" id="male" value="male" checked>Male
                             <input style="margin-left: 60px; border-radius: 3px;"
                             
                            type="radio" name="gender" id="female" value="female" checked >Female
                            <?php
                 }
                    ?> 
                    </div>
                 
                </label><br>
                <label style="margin-top: 5px;">Nationality <select name="nationality"
                        style="margin-left: 54px; border-radius: 3px;width: 170px;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-weight: bold;">
                        <option value="none" >--Select--</option>
                        <option value="Rwandan">Rwandan</option>
                        <option value="American">American</option>
                        <option value="Ugandan">Ugandan</option>
                        <option value="English">English</option>

                    </select></label><br>
                <label style="margin-top: 5px;">Username<input style="margin-left: 65px; border-radius: 3px;"
                        type="text" placeholder="Enter Your Username" name="userName" id="username" value="<?php echo $rows['username'] ?>"></label><br>
                <label style="margin-top: 5px;">Password<input style="margin-left: 68px; border-radius: 3px;"
                        type="password" placeholder="Enter Your password"name="password" id="pssd" value="<?php echo $rows['password'] ?>" #md5></label><br>
                <label style="margin-top: 5px;">Confirm password<input style="margin-left:   12px; border-radius: 3px;"
                        type="password" placeholder="Confirm Your Password" name="cpassword" id="cpssd"></label><br>
                <input type="submit" value="Update" 
                    style="width: 120px; margin-left: 100px;background-color: blue; color: white; border-color: whitesmoke;"    name="submit">
            </form>
        </div>
    </div>

</body>

</html>
<?php

if(isset($_POST['submit'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $telephone=$_POST['telephone'];
    $gender=$_POST['gender'];
    $nationality=$_POST['nationality'];
    $username=$_POST['userName'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $encrypted=hash("md5",$password);
    echo $firstName;

    $query= "update mis_users set firstName='$firstName', lastName='$lastName' where id=$id;";

    $select= mysqli_query($conn,$query);

    if($select==TRUE){
        echo "Data updated succesfuly";
        
        $addQuery=mysqli_query($conn,"SELECT * from mis_users");
    
               echo "<table border='1'><tr><th>id</th><th>FirstName</th><th>lastName</th><th>Gender</th><th>Update</th><th>delete</th></tr>";
               while($row=mysqli_fetch_assoc($addQuery)){
                   ?>
                   <tr>
                   <td><?php echo  $row["id"];?></td>
                   <td><?php echo $row["firstName"];?></td>
                   <td><?php echo $row["lastName"];?></td>
                    <td> <?php echo $row["gender"]?></td>
                    <td><a href="update.php?id=<?php echo $row["id"];?>">update</a></td>
                    <td><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
                     
                   </tr>

            
                   <?php
                }

    }else{
        echo "not updated";
    }

}
}
        }
    }
}
?>