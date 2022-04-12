<?php
//This file will be ran one time once the game begins to take all players from the database and randomly shuffle the array around.


//I need to iniciate the database connection but for now Im just going to right some stuff

//Some variables might need to be changed to match the connection 
//Pulling the counter numbers from the database "thegame" into the array datas inorder to be used for the function
function sortPlayers(){

$sql = "SELECT 'count' FROM thegame";
$result = mysqli_query($connect, $sql);
//creating the array
$datas = array();

//If results exists fill them out
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$datas[] = $row;
	}
}

//Now that all players numbers have been pulled, the array should consists of x amount of numbers ranging from 2-x. 

//Next step is to randomize the order 

shuffle($dates);
}


?>