<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<header>

<nav>
    <ul>
    <li><a href="index.php">home</a></li>
    <li><a href="">portfolio</a></li>
    <li><a href="">about</a></li>
    <li><a href="">contact</a></li>
    </ul>
<div>
<form action="includes/login.inc.php" method="post">

<input type="text" name="mailuid" placeholder="Username/E-mail">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="login-submit">LOGIN</button>

</form>
<a href="signup.php">Signup</a>
<form action="includes/logout.inc.php" method="post"></form>
<button type="submit" name="logout-submit">Login</button>
</div>

</nav>

</header>





