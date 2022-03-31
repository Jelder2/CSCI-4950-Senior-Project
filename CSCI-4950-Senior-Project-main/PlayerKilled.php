<?php 
//including file to get the array datas
include 'SortingPlayers.php';
//This function will search through the array datas and find the player who is to be eliminated and delete them from the array

//Will need to go back and change this later when I figure out how to pull the targets Id 
$playersId = boobies;

function playerDied(){
	$arrayPlayersId = array_search($playersId, $datas);
	unset($datas[$arrayPlayersId]);
	$datas = array_values($datas);
}

?>