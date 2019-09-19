<?php include('eserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Events</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="header">
  	<h2>Events</h2>
  </div>
	
  <form method="post" action="event.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Participant 1</label>
  	  <input type="text" name="username" value="<?php echo $participanta; ?>">
  	</div>
	<div class="input-group">
  	  <label>Participant 2</label>
  	  <input type="text" name="username" value="<?php echo $participantb; ?>">
  	</div>
	<div class="input-group">
  	  <label>Participant 2</label>
  	  <input type="text" name="username" value="<?php echo $participantc; ?>">
  	</div>
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Phone</label>
  	  <input type="tel" name="phone" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $phone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>College</label>
  	  <input type="text" name="college" value="<?php echo $college; ?>">
  	</div>
	<div class="input-group">
  	  <label>Event</label>
		<select>
  			<option value="Bugs">Bugs Light Year</option>
  			<option value="Cloud">Cloud Castles</option>
  			<option value="Star">Star Employee</option>
  			<option value="The">The Constellation</option>
			<option value="Nerd">Nerd Wars</option>
		</select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>
