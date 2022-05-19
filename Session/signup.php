<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
 <h3>Signup Form</h3>
 <form action="insertUser.php" method="POST" enctype="multipart/form">
     <div>
         <lable>firstName</lable>
         <input type="text" name="firstName" required/>
     </div>
     <div>
         <lable>lastName</lable>
         <input type="text" name="lastName" required/>
     </div>
     <div>
         <lable>email</lable>
         <input type="email" name="email" required/>
     </div>
     <div>
         <lable>Role</lable>
         <input type="text" name="role" required/>
     </div>
     <div>
         <lable>gender</lable>
         <div class="gender">
             <input type="radio" name="gender" value="Male" />Male<br>
             <input type="radio" name="gender" value="female" />Female
         </div>
     </div>
     <div>
         <lable>telephone</lable>
         <input type="text" name="telephone" required/>
     </div>
     <div>
         <lable>username</lable>
         <input type="text" name="username" required/>
     </div>
     
     <div>
         <lable>password</lable>
         <input type="password" name="password" />
     </div> 
     <button type="submit" value="submit" name="submit">Sign up</button>
 </form>
    
</body>
</html>