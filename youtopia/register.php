	<?php include('server.php') ?>
  <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../project/style/style2.css">
</head>
<body>
<form method="post" class="form" action="register.php">
  <div class='control'>
    <h1>
      Register
    </h1>
  </div>
  
    <?php include('errors.php'); ?>
  <div class='control block-cube block-input'>
    <input name='username' placeholder='Username' type='text' value="<?php echo $username; ?>" required>
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
    <input name='email' placeholder='Email' type='email' value="<?php echo $email; ?>" required>
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
    <input name='password_1' type='password' placeholder="Password">
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
    <input name='password_2' type='password' placeholder="Confirm Password">
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

  <button type = "submit" class='btn block-cube block-cube-hover' name="reg_user">
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
    
      Register
      
    </div>
  </button>
  <br>
   <button type = "submit" class='btn block-cube block-cube-hover'>
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
    <a href="login.php" style="text-decoration: none;color: white">
      Already a member? Login
      </a>
      
    </div>
  </button>
 
</form>
</body>
</html>
