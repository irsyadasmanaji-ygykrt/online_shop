<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    /* Gaya untuk halaman login */
    body {
      background-color: #f0f4f8;
      font-family: 'Roboto', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      box-sizing: border-box;
      text-align: center;
    }

    .login-container h1 {
      color: #333;
      margin-bottom: 10px;
    }

    .login-container p {
      color: #666;
      font-size: 14px;
      margin-bottom: 20px;
    }

    #infoMessage {
      color: #e74c3c;
      margin-bottom: 15px;
    }

    .login-container label {
      display: block;
      font-weight: bold;
      color: #444;
      text-align: left;
      margin-bottom: 8px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }

    .login-container input[type="text"]:focus,
    .login-container input[type="password"]:focus {
      border-color: #3498db;
      outline: none;
    }

    .remember-me {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin: 15px 0;
    }

    .remember-me label {
      margin: 0;
      font-weight: normal;
    }

    .login-container input[type="submit"] {
      width: 100%;
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 14px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 10px;
    }

    .login-container input[type="submit"]:hover {
      background-color: #2980b9;
    }

    .login-container a {
      text-decoration: none;
      color: #3498db;
      display: block;
      margin-top: 20px;
      transition: color 0.3s;
    }

    .login-container a:hover {
      color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1><?php echo lang('login_heading'); ?></h1>
    <p><?php echo lang('login_subheading'); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>

    <?php echo form_open("auth/login"); ?>

    <p>
      <?php echo lang('login_identity_label', 'identity'); ?>
      <?php echo form_input($identity); ?>
    </p>

    <p>
      <?php echo lang('login_password_label', 'password'); ?>
      <?php echo form_input($password); ?>
    </p>

    <div class="remember-me">
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
      <?php echo lang('login_remember_label', 'remember'); ?>
    </div>

    <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

    <?php echo form_close(); ?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
  </div>
</body>
</html>
