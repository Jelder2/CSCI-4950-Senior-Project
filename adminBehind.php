<?php 

session_start(); 

$host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $connect = mysqli_connect($host_name, $user_name, $password, $database);
  $sql = "SELECT User, email, pin FROM thegame";
  $result = $connect->query($sql);
  ?>
<html>
<link rel="stylesheet" href="assets/stylesheets/adminstyle.css">
<head>
 <title>Admin Page</title>
</head>


<body>

<!-- Menu Navigation Bar -->
<div class="menu">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.html">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="game.html">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>

       </div>
</div>

  <!--Table styling-->
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
        
        table tr {background-color: #f2f2f2;}
        
        table tr:hover {background-color: #ddd;}
        
        table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #00a3a3;
          color: white;
        }
        </style>



<?php 
//Table 

echo "<table>

<tr>

<th>User</th>

<th>Email</th>

<th>Pin</th>

<th>Delete</th>

</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["User"]."</td><td>".$row["email"]."</td><td>".$row["pin"]."</td><td> <form method='POST' action='delete.php'>
    <input type='hidden' name='id' value= " .$row['User']. " /> <input type='submit' value='Delete' /> </form> </td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}?> 

<!--Button -->
<div class = "content">
            <section id="Content">
                <h3>Push The Button To Start The Game</h3>
    
                <a href="SortingPlayers.php" class="animated-button1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Button
                  </a>
            </section>
        </div>
</body>
</html>



