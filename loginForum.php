<?php 

session_start(); 

$host_name = 'db5006574384.hosting-data.io';
  $database = 'dbs5453727';
  $user_name = 'dbu1706119';
  $password = 'Redwagon12!';

  $connect = mysqli_connect($host_name, $user_name, $password, $database);
//include "connect.php";



if (isset($_POST['nameLogin']) && isset($_POST['passLogin'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['nameLogin']);

    $passwordd = validate($_POST['passLogin']);

    if (empty($email)) {

        header("Location: login.html?error=Email is required");

        exit();

    }else if(empty($passwordd)){

        header("Location: login.html?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `thegame` WHERE email='$email' AND pass='$passwordd'";

        

        $result = mysqli_query($connect, $sql);

        
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['pass'] === $passwordd) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['User'] = $row['User'];

                $_SESSION['count'] = $row['count'];

                header("Location: thegame.php");

                exit();

            }else{
                
                header("Location: login.html?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.html?error=Incorect User name or password2");

            exit();

        }

    }

}else{

    header("Location: index.html");

    exit();

}
