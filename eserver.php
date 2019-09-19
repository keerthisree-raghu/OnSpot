<?php
session_start();

// initializing variables
$participanta = "";
$participantb = "";
$participantc = "";
$email    = "";
$phone    = "";
$events    = "";
$college    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $participanta = mysqli_real_escape_string($db, $_POST['participanta']);
  $participantb = mysqli_real_escape_string($db, $_POST['participantb']);
  $participantc = mysqli_real_escape_string($db, $_POST['participantc']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $events = mysqli_real_escape_string($db, $_POST['events']);
  $college = mysqli_real_escape_string($db, $_POST['college']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($participanta)) { array_push($errors, "Participant 1 is required."); }
  if (empty($email)) { array_push($errors, "Email is required."); }
  if (empty($phone)) { array_push($errors, "Phone number is required."); } 
  if (empty($college)) { array_push($errors, "College name is required."); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM events WHERE participanta='$participanta' OR email='$email' OR phone='$phone'LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  /* if ($user) {  // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    } 

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists.");
    }
    if ($user['phone'] === $phone) {
      array_push($errors, "Phone number already exists.");
    }
  } */

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO events (participanta, participantb, participantc, email, phone, college, events) 
  			  VALUES('$participanta', '$participantb', '$participantc', '$email', '$phone','$college','$events')";
  	mysqli_query($db, $query);
  	$_SESSION['[participanta]'] = $participanta;
  	$_SESSION['success'] = "Successful";
  	header('location: event.php');
  }
}
