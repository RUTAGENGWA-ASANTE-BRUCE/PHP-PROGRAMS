<html>
    <head>
        <style>
             .errorMessage3{
                margin-top:20px;
                background-color: greenyellow;
                color:darkgreen;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
            .errorMessage1{
                margin-top:20px;
                background-color: #BC544B;
                color:#710c04;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
            .errorMessage2{
                margin-top:20px;
                background-color: #db7093;
                color:darkred;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
        </style>
    </head>
</html>
<?php
if (isset($_POST['submit']) && isset($_FILES['image'])) {
    function pre_r($array){
        echo "<pre>";
        echo print_r($array);
        echo "</pre>";
     };
     $phpUploaderrors=array(
        0=>"There is no error, the file uploaded with success",
        1=>"The uploaded file exceeds the upladed_max_filesize directive i  php.ini",
        2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        3=>"The uploaded file was only partially uploaded",
        4=>"No file was uploaded",
        6=>"Missing a temporary folder",
        7=>"Failed to write file to disk",
        7=>'a PHP extension  stopped the file upload',
    );
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $telephone = $_POST['telephone'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $username = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $role = $_POST['role'];
        // $image=$_POST['image'];

        $encrypted = hash("md5", $password);

        
        $imagePath='uploads/'.$_FILES['image']['name'];
        
        $DB_server = "localhost";
        $DB_name = "rca";
        $DB_user_name = "root";
        $DB_user_password = "bruce";
        $conn = mysqli_connect("localhost", "root", "", "rca");
        if (!$conn) {
                echo mysqli_connect_error();
        } else {

                $sql = "insert into mis_users(firstName,lastName,telephone,gender,nationality,username,password,role,image) values('$firstName','$lastName','$telephone','$gender','$nationality','$username','$password','$role','$imagePath')";
                $mysqlinsert = mysqli_query($conn, $sql);
                move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.$_FILES['image']['name']);
                pre_r($_FILES);
                echo "<p class='errorMessage3'>".$phpUploaderrors[$_FILES['image']['error']]."</p>";
                 echo "<a href='./process.php' style='color :red;'>read</a>"; 

        }
}
?>