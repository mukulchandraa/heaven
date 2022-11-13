<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/singup/style.css">
    <title>LOGIN </title>
</head>
<body>
    <form action="login.php" method="post"> 
        <div id="resitration">
       <div class="logo">
     <a href="index"><img src="img/heaven.png" alt="HEAVEN"></a>   
    </div> 
       <p>LogIn into your account</p> 

        <input type="email" name="email" id="email" placeholder="email address" required>
        
        <input type="password" name="password" id="password" placeholder="Enter  your password" required>
        
        <button>LOG IN</button>
        <br>
       <a href="singup">Don't have an account?</a>
    </div>
</form>

<script src="js/login/loginvalidation.js"></script>
</body>
</html>