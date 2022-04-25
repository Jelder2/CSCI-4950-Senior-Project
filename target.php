<?php
session_start();
require 'thegame.php';
$pin = $_POST['pin'];
$host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $connect = mysqli_connect($host_name, $user_name, $password, $database);
    $deleteRow = "DELETE FROM `thegame` WHERE `thegame`.`pin` = '$pin'";
    $deleteRow2 = "DELETE FROM `playerList` WHERE `playerList`.`User` = '$row10'";
  if(mysqli_query($connect, $deleteRow));
  {
    $sql7 = "ALTER TABLE thegame DROP 'Count'";
    $sql8 = "ALTER TABLE thegame AUTO_INCREMENT = 1";
    $sql9 = "ALTER TABLE thegame ADD 'Count' int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
    $result23 = $connect->query($sq17);
    $result24 = $connect->query($sql8);
    $result25 = $connect->query($sql9);

    if(mysqli_query($connect,$deleteRow2))
    {
    $sql4 = "ALTER TABLE playerList DROP Counts";
    $sql5 = "ALTER TABLE playerList AUTO_INCREMENT = 1";
    $sql6 = "ALTER TABLE playerList ADD Counts int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
    $result20 = $connect->query($sql4);
    $result21 = $connect->query($sql5);
    $result22 = $connect->query($sql6);
    }
  
  }

  $sql69 = "SELECT `pin` FROM `thegame`";
  $result69  = $connect->query($sql69);
  
  if($result69->num_rows > 0)
  {
    while($row69 = $result69->fetch_assoc()) {
      if($pin == $row69["pin"])
      {
        header("Location: thegame.php");
      }
      else{

      }
    }
  }
  $sql420 = "UPDATE `thegame` SET `playerScore`= `playerScore`+1 WHERE `User` = '$row2'";
  $result422 = $connect->query($sql420);
  header("Location: thegame.php");
?>