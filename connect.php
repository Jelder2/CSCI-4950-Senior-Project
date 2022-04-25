<?php

//variables from the login.html signup forum that will get put into the database
$name = $_POST['namee'];
$passwordd = $_POST['passwordd'];
$email = $_POST['email'];
$pin = $_POST['pin'];

//login info, will at some point make a seperate file for database connect 

 $host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $connect = mysqli_connect($host_name, $user_name, $password, $database);

//if connection failed, end, else do login

  if (mysqli_connect_errno()) {

    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');

  } else {
	  
	  //The next parts are inputing the variables into the database.
    
	  $stmt = $connect->prepare("INSERT INTO `thegame` (`User`, `pass`, `email`, `pin`) VALUES (?,?,?,?)");
	  $stmt->bind_param("sssi", $name, $passwordd, $email, $pin);
	  $stmt->execute();
	  $stmt->close();  
	  
	 
	mysqli_close($connect);
	  
  header("Location: login.html"); 
	  

  }

?>
