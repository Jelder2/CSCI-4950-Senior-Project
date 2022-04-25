<!--Used for adminBehind delete peopel-->
<?php 
include 'adminBehind.php';
$valuee = $_POST['id'];
$host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $connect = mysqli_connect($host_name, $user_name, $password, $database);
    $deleteRow = "DELETE FROM `thegame` WHERE `thegame`.`User` = '$valuee'";
  if(mysqli_query($connect, $deleteRow));
  {
  header("Location: adminBehind.php");
  }
  ?>

