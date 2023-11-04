<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>đăng nhập</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700&subset=latin,cyrillic" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="sign.css" />
</head>

<body>
  <h2>Sign in</h2>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form action="../Controller/dang_nhap_submit.php" method="POST">
        <h1>Sign in</h1>
        <input type="email" placeholder="Email" name="user" />
        <input type="password" placeholder="Password" name="password" />
        <a href="#">Forgot your password?</a>
        <button type="submit" name="submit">Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Chào mừng quý khách đến với nhà hàng</h1>
          <p>Ấn "welcome" để vào nhà hàng và đặt món</p>
          <button onclick="redirectToSpecificPage()" class="ghost" id="signUp">Welcome</button>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/javascrip.js?v= <?php echo time(); ?>"></script>
</body>

</html>