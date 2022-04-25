<?php
  $host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $link = mysqli_connect($host_name, $user_name, $password, $database);

  if(isset($_POST["submit"]))
   {
    $firstName = $_POST['Namee'];
    $email = $_POST['Email'];
    $passwordd = $_POST['Passwordd']

    $sql = "INSERT INTO players (user_namee, user_email, user_password) VALUES ($firstName, $email, $passwordd);";
    $stmt = mysqli_stmt_prepare($link);
   }
   else{
    header("Location: index.php?signup=success");
   }
  
?>