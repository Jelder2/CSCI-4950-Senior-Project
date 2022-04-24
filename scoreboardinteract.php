<?php
    function OpenCon(){
    	$dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "thegame2";

	    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect Failure". $conn -> error);

	    return $conn;
    }

    function CloseCon($conn){
    	$conn->close();
    }

    function getNameArr(){
        $data = array();
        $conn = OpenCon();
        $sql = "SELECT USER, playerScore FROM thegame ORDER BY playerScore DESC LIMIT 50;";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            printf("%s (%s)\n", $row["USER"], $row["playerScore"]);
        }
    }
    
    function getName(int $num, int $Offset) {
        $conn = OpenCon();
        $sql = "SELECT USER FROM thegame ORDER BY playerScore DESC LIMIT $num, $Offset;";
        $select = $conn->query($sql);
        $result = $select->fetch_array()[0] ?? '';
        return $result;
    }

    function getScore(int $num, int $Offset) {
        $conn = OpenCon();
        $sql = "SELECT playerScore FROM thegame ORDER BY playerScore DESC LIMIT $num, $Offset;";
        $select = $conn->query($sql);
        $result = $select->fetch_array()[0] ?? '';
        return $result;
    }
    //getNameArr();
?>