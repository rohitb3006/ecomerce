	<?php include('server.php') ?>
  <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../project/style/style2.css">
</head>
<body>
<form method="post" class="form" action="login.php">
  <div class='control'>
    <h1>
      Sign In
    </h1>
  </div>

    <?php include('errors.php'); ?>
  <div class='control block-cube block-input'>
    <input name='username' placeholder='Username' type='text' required>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
  </div>
  <div class='control block-cube block-input'>
    <input name='password' placeholder='Password' type='password' required>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
  </div>

  <button type = "submit"   class='btn block-cube block-cube-hover' name="login_user">
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
    <div class='text'>
          Log In

    </div>
  </button>
  <br>
  <button type = "submit" class='btn block-cube block-cube-hover' name="Register">
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
    <div class='text'>
    <a href="register.php" style="text-decoration: none;color: white">
      Register Now
      </a>

    </div>
  </button>
  
  <button type = "submit" class='btn block-cube block-cube-hover' name="Forgot Password">
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
    <div class='text'>
    <a href="forgot.php" style="text-decoration: none;color: white">
      Forgot Password
      </a>

    </div>
  </button>
</form>
</body>
</html>
