<?php
    include 'connect.php'

    function getName(int $num, int $Offset) {
        $select = mysql_query("SELECT 'USER' FROM 'thegame' ORDER BY 'playerScore' DESC LIMIT $num, $Offset");
        return $select;
    }

    function getScore(int $num, int $Offset) {
        $select = mysql_query("SELECT 'playerScore' FROM 'thegame' ORDER BY 'playerScore' DESC LIMIT $num, $Offset");
        return $select;
    }

?>