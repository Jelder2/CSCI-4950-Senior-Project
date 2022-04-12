<?php 

session_start(); 

include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $passwordd = validate($_POST['passwordd']);

    if (empty($uname)) {

        header("Location: login.html?error=Email is required");

        exit();

    }else if(empty($pass)){

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

                header("Location: game.html");

                exit();

            }else{

                header("Location: login.html?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.html?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: login.html");

    exit();

}
