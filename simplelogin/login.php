
<?php
 include ("connect.php");
include("account_login.php")
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Simple Login PHP MySQL</title>

  </head>

 <body>
  <form method="post">
                
    <center>

    <p>Username</p>
<input type="text" name="un" required>
<p>Password</p>
<input type="password" name="pw" required>  
<br><br>
<button type="submit" name="login1">Login</button>
 
  </form>
  </body>
</html>