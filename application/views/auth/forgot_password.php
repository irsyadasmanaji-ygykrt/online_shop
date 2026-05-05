<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <style>
    /* Gaya untuk halaman Forgot Password */
    body {
      background-color: #f0f4f8;
      font-family: 'Roboto', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .forgot-password-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      box-sizing: border-box;
      text-align: center;
    }

    h1 {
      color: #333;
      margin-bottom: 10px;
    }

    p {
      color: #666;
      font-size: 14px;
      margin-bottom: 20px;
    }

    #infoMessage {
      color: #e74c3c;
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      color: #444;
      text-align: left;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      transition: border-color 0.3s;
      margin-bottom: 15px;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #3498db;
      outline: none;
    }

    input[type="submit"],
    .back-button {
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

    input[type="submit"]:hover,
    .back-button:hover {
      background-color: #2980b9;
    }

    .back-button {
      display: block;
      text-decoration: none;
      text-align: center;
      margin-top: 10px;
    }
    .forgot-password-container a {
      text-decoration: none;
      color: #3498db;
      display: block;
      margin-top: 20px;
      transition: color 0.3s;
    }

    .forgot-password-container a:hover {
      color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="forgot-password-container">
    <h1><?php echo lang('forgot_password_heading'); ?></h1>
    <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>

    <?php echo form_open("auth/forgot_password"); ?>

      <p>
        <label for="identity">
          <?php 
            echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); 
          ?>
        </label>
        <?php echo form_input($identity); ?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn')); ?></p>

    <?php echo form_close(); ?>

    <!-- Tombol Kembali ke Halaman Login -->
    <a href="login">Kembali ke Login</a>
  </div>
</body>
</html>
