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
  	  <input type="text" name="participanta" value="<?php echo $participanta; ?>">
  	</div>
	<div class="input-group">
  	  <label>Participant 2</label>
  	  <input type="text" name="participantb" value="<?php echo $participantb; ?>">
  	</div>
	<div class="input-group">
  	  <label>Participant 2</label>
  	  <input type="text" name="participantc" value="<?php echo $participantc; ?>">
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
		<select name="events">
  			<option value="Bugs Light Year">Bugs Light Year</option>
  			<option value="Cloud Castles">Cloud Castles</option>
  			<option value="Star Employee">Star Employee</option>
  			<option value="The Constellation">The Constellation</option>
			<option value="Nerd Wars">Nerd Wars</option>
		</select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
  <br><br><br>
</body>
</html>
