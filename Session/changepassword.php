<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <Link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<form action="change.php" method="POST" enctype="multipart/form-data">
  <h1>Change Password</h1>
  <div class="">
    <input type="hidden" name="userid" value="<?= $_GET['userid'] ?>">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
  </div>
  <div class="">
    <label for="new">New Password</label>
    <input type="password" name="newpassword" id="new" pattern=".{6,}">
  </div>
  <div class="">
    <label for="cpassword">Confirm Password</label>
    <input type="password" name="cpassword" id="cpassword">
  </div>
  <div class="">
    <input type="submit" name="Change" value="Change password">
  </div>
</form>
</body>
</html>

