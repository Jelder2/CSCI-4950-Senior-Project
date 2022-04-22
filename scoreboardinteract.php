<?php
    include 'connect.php'

    function getName(int $High, int $Low) {
        $select = mysql_query("SELECT 'USER' FROM 'thegame' ORDER BY 'playerScore' DESC LIMIT $Low, $High");
        return $select;
    }

    function getScore(int $High, int $Low) {
        $select = mysql_query("SELECT 'playerScore' FROM 'thegame' ORDER BY 'playerScore' DESC LIMIT $Low, $High");
        return $select;
    }
?>