<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta info-->
    <title>AUthentication Page</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
    <form action="authenticate.php" method="POST" enctype="multipart/form-data" >
        <div class="row">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="row">
            <label for="pass">Password</label>
            <input type="password" name="password" pattern=".{6,}" title="Password must be 6 or more characters" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Login">
        </div>
    </form>
</body>

</html>