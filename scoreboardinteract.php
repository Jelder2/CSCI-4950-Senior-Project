<?php
    function OpenCon(){
    	$dbhost = 'db5006574384.hosting-data.io';
        $dbuser = 'dbu1706119';
        $dbpass = 'Redwagon12!';
        $db = 'dbs5453727';

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect Failure". $conn -> error);

	return $conn;
    }

    function CloseCon($conn){
    	$conn->close();
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
?>
