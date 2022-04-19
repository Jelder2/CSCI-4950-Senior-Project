<?php
    include 'connect.php'
    $select = mysql_query("SELECT 'USER' FROM 'thegame' ORDER BY 'playerScore' ASC LIMIT 1, 50");
    $users = array();

    while(($row = mysql_fetch_assoc($select))) {
        $users[] = $row['select'];
    }

    $select2 = mysql_query("SELECT 'playerScore' FROM 'thegame' ORDER BY 'playerScore' ASC LIMIT 1, 50");
    $userScore = array();

    while(($row = mysql_fetch_assoc($select2))) {
        $userScore[] = $row['select'];
    }
?>