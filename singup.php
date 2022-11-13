<?php
if(isset($_POST['name'])){

include 'config.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$sql ="INSERT INTO `the_heaven`.`sing_up_users` (`name`, `gender`, `email`, `phone`, `password`, `dt`) VALUES ('$name', '$gender', '$email', '$phone', '$password', current_timestamp());";

if($con->query($sql) == true){
    // echo "success insert";
}
else{
    // echo "error: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
    <link rel="stylesheet" href="styles/singup/style.css">
</head>

<body>
    <form action="singup.php" method="post"> 
        <div id="resitration">
       <div class="logo">
    <a href="index"><img src="img/heaven.png" alt="HEAVEN"></a>
    </div> 
       <p>Create a new account</p> 

   <input type="text" name="name" id="name"  placeholder="username"  value = "" required>
    
      <input  type="text" name="gender" id="gender"  placeholder="Male/Female/Other" value = "" required>

        <input type="email" name="email" id="email"  placeholder="email address" value = "" required>
        
        <input type="phone" name="phone" id="phone"   placeholder="Phone number"  value = "">
        
        <input type="password" name="password"   id="password" placeholder="Create password" value = ""  required>

        <input type="password" name="comfirm password"   id="cpassword" placeholder="comfirm password" value = ""  required>
        
        
        <button>CREATE MY HEAVEN ACCOUNT</button>
        <br>
       <a href="login">Already have an account?</a>
    </div>
</form>
<script src="js/singup/singup_validation.js"></script>
</body>
</html>