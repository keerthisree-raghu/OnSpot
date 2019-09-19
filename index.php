<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Incognito 2019</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
        * {
        margin: 0px;
        padding: 0px; 
        flex-wrap: wrap;
        }

        body {
        font-size: 120%;
        background-image: url("bg3.jpg");
        }

        h1 {
            width: auto;
            margin: 50px auto 0px;
            color: white;
            background-color: rgba(0,0,0,.45);
            text-align: center;
            /*border: 1px solid #B0C4DE;*/
            border-bottom: none;
            border-radius: 10px 10px 10px 10px;
            padding: 20px;
        }

        form, .content {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            /*border: 1px solid #B0C4DE;*/
            background-color: rgba(0,0,0,.45);
            border-radius: 10px 10px 10px 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
<h1>Incognito 2019</h1>
<br><br><br><br>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><a href="register.php">Registration</a></button>
  	</div>
        <br>
   	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><a href="event.php">Event Registration</a></button>
  	</div>

  

  </body>
</html>
