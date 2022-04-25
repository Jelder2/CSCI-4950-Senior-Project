<?php 

$host_name = 'db5006574384.hosting-data.io';
$database = 'dbs5453727';
$user_name = 'dbu1706119';
$password = 'Redwagon12!';

$connect = mysqli_connect($host_name, $user_name, $password, $database);
$sql = "SELECT User, email, pin FROM thegame";
//$sql2 = "SELECT User FROM playerList";

//$sql3 = "SELECT `User` FROM `playerList` WHERE `Count` = +1";
$result = $connect->query($sql);
//$result2 = $connect->query($sql2);

// Start the session
session_start();
$row2 = $_SESSION['User'];
$sql22 = "SELECT Counts FROM playerList WHERE User = '$row2'";
$result4 = $connect->query($sql22);



//$userCount
  if($result4->num_rows > 0)
  {
      $row7 = $result4->fetch_assoc();
      $row8 = $row7['Counts'];
      $sql33 = "SELECT User FROM playerList WHERE Counts = $row8 + 1";
      $result5 = $connect->query($sql33);
      if($result4->num_rows > 0)
      {
        $row9 = $result5->fetch_assoc();
        $row10 = $row9['User'];
        $sqlTarget = "SELECT User, email FROM `thegame` WHERE `User` = '$row10'";
        $result6 =$connect->query($sqlTarget);  
        
      }
      else{
        $sql33 = "SELECT User FROM playerList WHERE Counts = 1";
        $result6 = $connect->query($sql33);
        $row9 = $result6->fetch_assoc();
        $row10 = $row9['User'];
        $sqlTarget = "SELECT User, email FROM `thegame` WHERE `User` = '$row10'";
        $result6  = $connect->query($sqlTarget);  
        
        
        
        
      }
    }
    else{
      echo "Bing Bong";
    }
  
//$targetUser = mysqli_query($connect, $sql33);
//$targetUserGame = mysqli_query($connect, $sqlTarget);

if($_SESSION['email']== "adminadmin@gmail.com")
{
    header("Location: adminBehind.php");
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Game</title>
</head>
<link rel="stylesheet" href="/assets/stylesheets/gameStyle.css">
<body>
     
    <!-- Header Section -->
     
    <!-- Menu Navigation Bar -->
    <div class="menu">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
            <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.php">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="thegame.php">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>
        
       </div>

       <style>
        table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        table td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        table tr {background-color: black;}
        
       
        
        table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #00a3a3;
          color: white;
        }
        </style>



       <div class="content">
        <h1>Your Target:</h1>


        
        <?php 
//Target Table 





echo "<table>

<tr>

<th>User</th>

<th>Email</th>

<th>Eliminate Target</th>


</tr>";
if ($result6->num_rows > 0) {
    //Searches the array in sortingPlayers.php to find the users location
  //  $arrayPlayersId = array_search($_SESSION['User'], $datas);
   // echo $arrayPlayersId;
   // $userBeforePlayer;
  // output data of each row
  while($row = $result6->fetch_assoc()) {
    echo "<tr><td>".$row["User"]."</td><td>".$row["email"]."</td><td> <form method='POST' action='target.php'>
    <input type='text' placeholder='pin' id='pin' name='pin'  /> <input type='submit' value='Eliminate' /> </form> </td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?> 
       
    </div>
     
    <!-- Body section -->

     
    <!-- Footer Section -->

</body>
</html>