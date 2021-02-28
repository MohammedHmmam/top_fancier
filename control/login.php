<?php
session_start();
require_once('../inc/initialize.php');

//Check if fields does not empty
if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && $_POST['password']){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
        #check valid username
        if(preg_match("/^[a-z0-9-_. ]*$/i" , $username)){

             //Check username length
            if(strlen($username) >= 3 && strlen($username) <= 50){

                //Check if user exists in Database
                $stmt = $pdo->prepare("SELECT * FROM fancier WHERE username = :username");
                $stmt->bindValue(":username" , $username , PDO::PARAM_STR);
                $stmt->execute();
                if($stmt->rowCount()){

                    $user = $stmt->fetch();
                    //check password
                    if(password_verify($password , $user['password'])){

                        $_SESSION['user_id']    = $user['id'];
                        $_SESSION['username']   = $user['username'];
                        $_SESSION['email']      = $user['email'];

                        header("Location: ../view/index.php");

                    }else{
                        echo "Password Incorrect!";
                    }

                }else{
                    echo "Username does not Exists!";
                }

            }else{

                echo "User name length should e Between 3 To 50 Character!";

            }

        }else{
            echo "Invalid username!";
        }


}else{
    echo "All fields required!";
}

?>