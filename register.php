<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="id.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="tel" name="phone" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $phone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>College Name</label>
  	  <input type="text" name="college" value="<?php echo $college; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
	  </div>
  </form>
  <br><br><br>
</body>
</html>