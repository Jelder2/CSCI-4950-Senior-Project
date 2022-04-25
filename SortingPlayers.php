<?php
//This file will be ran one time once the game begins to take all players from the database and randomly shuffle the array around.





	
	
	
	 $host_name = 'db5006574384.hosting-data.io';
	  $database = 'dbs5453727';
	  $user_name = 'dbu1706119';
	  $password = 'Redwagon12!';
	
	  $connect = mysqli_connect($host_name, $user_name, $password, $database);
	

	  $sql = "SELECT `User` FROM `thegame`";
$result = mysqli_query($connect, $sql);
//creating the array


$datas = array();

//If results exists fill them out
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		$datas[] = $row['User'];
	}
}

//Now that all players numbers have been pulled, the array should consists of x amount of numbers ranging from 2-x. 

//Next step is to randomize the order 

shuffle($datas);
//}
print_r($datas);
echo "who";
$counters = count($datas);
echo $counters;
for($i = 0; $i < $counters; $i++)
{
	//$datasName = next($datas);
	
	$stmt = ("INSERT INTO `playerList` (`User`) VALUES (\"$datas[$i]\")");
	if(mysqli_query($connect, $stmt)){
		echo "bob";
		}
		else{
			echo "failed";
		}
	

}

header("Location: adminBehind.php");

?>
