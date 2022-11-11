<?php

if(isset($_POST['name'])){


 $server = "localhost";
 $username= "root";
 $password= "";

 $con = mysqli_connect($server,$username,$password);
  
 if (!$con){
     die( "failed" .mysqli_connect_error());

 }
 
// echo"succeed";


$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$sql ="INSERT INTO `the_heaven`.`sing_up_users` (`name`, `gender`, `email`, `phone`, `password`, `dt`) VALUES ('$name', '$gender', '$email', '$phone', '$password', current_timestamp());";
// echo $sql; 
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
    <link rel="stylesheet" href="singupcss/style.css">
</head>

<body>
    <form action="singup.php" method="post"> 
        <div class="resitration">
       <div class="logo">
     
        <img src="singupcss/heaven.png" alt="HEAVEN">   
    </div> 
       <p>Create a new account</p> 

   <input type="text" name="name" id="name" placeholder="username"required>
 
    
      <input  type="text" name="gender" id="gender" placeholder="Male/Female/Other" required>

        <input type="email" name="email" id="email" placeholder="email address" required>
        
        <input type="phone" name="phone" id="phone" placeholder="Phone number">
        
        <input type="password" name="password" id="password" placeholder="Create password" required>
        
        
        <button>CREATE MY HEAVEN ACCOUNT</button>
        <br>
       <a href="#">Already have an account?</a>
    </div>
</form>

<script src="singupjs/index.js"></script>

</body>
</html>