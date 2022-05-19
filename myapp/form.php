<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                th {
                        color: red;
                }
        </style>
</head>

<body>
        <div style="background-color: blue;  width: 550px; border-radius: 8px; height: 610px; padding-top: 5px; padding-right: 20px; padding-bottom: 45px; margin-left: 500px ; margin-top: 50px;">
                <div style="background-color: whitesmoke; margin-left: 30px; width: 500px;  border-radius: 8px; margin-top: 5px; text-align: center; padding-bottom: 10px;">
                        <h1 style="font-weight: bold; margin-left: 60px;">Create account</h1>
                        <form style="display: flex; flex-direction: column;" action="upload.php" method="POST" enctype="multipart/form-data">
                                <label style="margin-top: 5px;">First Name<input style="margin-left: 60px; border-radius: 3px; " type="text" placeholder="Enter First Name" name="firstName" id="fName"></label><br>
                                <label style="margin-top: 5px;">Last Name<input style="margin-left: 61px; border-radius: 3px;" type="text" placeholder="Enter Last Name" name="lastName" id="lName"></label><br>
                                <label style="margin-top: 5px;">Email<input style="margin-left: 92px; border-radius: 3px;" type="email" placeholder="Enter Your Email" name="email"></label><br>
                                <label style="margin-top: 5px;">Telephone<input style="margin-left: 63px; border-radius: 3px;" type="tel" placeholder="Enter Telephone Number" name="telephone" id="tell"></label><br>
                                <label style="display: flex; flex-direction: row;margin-left: 98px; ">Gender<d style="display: flex; flex-direction: row; margin-left: 80px; border-radius: 3px;"><input type="radio" name="gender" id="male">Male<input style="margin-left: 60px; border-radius: 3px;" type="radio" name="gender" id="female">Female
                                        </d iv>
                                </label><br>
                                <label style="margin-top: 5px;">Nationality <select name="nationality" style="margin-left: 54px; border-radius: 3px;width: 170px;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-weight: bold;">
                                                <option value="none">--Select--</option>
                                                <option value="Rwandan">Rwandan</option>
                                                <option value="American">American</option>
                                                <option value="Ugandan">Ugandan</option>
                                                <option value="English">English</option>

                                        </select></label><br>
                                <label style="margin-top: 5px;">Username<input style="margin-left: 65px; border-radius: 3px;" type="text" placeholder="Enter Your Username" name="userName" id="username"></label><br>
                                <label style="margin-top: 5px;">Role<input style="margin-left: 96px; border-radius: 3px;" type="text" placeholder="Enter Your Role" name="role" id="role"></label><br>
                                <label style="margin-top: 5px; margin-left:89px;">Profile Picture<input style="margin-left: 45px; border-radius: 3px;" type="file" name="image" id="image"></label><br>
                                <label style="margin-top: 5px;">Password<input style="margin-left: 68px; border-radius: 3px;" type="password" placeholder="Enter Your password" name="password" id="pssd" #md5></label><br>
                                <label style="margin-top: 5px;">Confirm password<input style="margin-left:   12px; border-radius: 3px;" type="password" placeholder="Confirm Your Password" name="cpassword" id="cpssd"></label><br>
                                <input type="submit" value="Register" style="width: 120px; margin-left: 100px;background-color: blue; color: white; border-color: whitesmoke;" name="submit">
                                <a href="./process.php" style="color :red;">read</a>
                        </form>
                </div>
        </div>

</body>


</html>