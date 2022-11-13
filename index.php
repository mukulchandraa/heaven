<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heaven</title>
  <link rel="stylesheet" href="styles/index/style.css">
  <link rel="stylesheet" href="styles/index/utils.css">
 
</head>

<body>
  <header>
    <div class="navbar">
      <li><a href="index" class="list"><img src="img/home.png" alt="Home"></a></li>
      <li><a href="#" class="list"><img src="img/message.png" alt="messages"></a></li>
      <li><a href="#" class="list"><img src="img/notification.png" alt="notificatons"></a></li>
      <li><a href="#" class="list"><img src="img/setting.png" alt="settings"></a></li>
      <li><a href="#" class="list"><img src="img/profile.png" alt="profile"></a></li>
    </div>
  </header>
  <main>
    <div id="heaven"><img id="logo" src="img/heaven.png" alt=""></div>
    <div id="container"> <img id="scricon" src="img/search icon3.png" alt="search icon"><input class="input-text"
        type="text" placeholder="Search or post to your community" id="Search">
      <div class="btn"><button>Post</button></div>
    </div>
    <div class="singup-login-container"><a href="login">Already have an account/Login</a><a href="singup">Don't have an account?/singup</a></div>
  </main>
  <footer>
    <div class="all-center">
      <P>copyright 2021 &copy; The heaven</P>
    </div>
  </footer>
  <script src="js/index/index.js"></script>
</body>

</html>