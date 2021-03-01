<?php
require_once('../inc/initialize.php');

if(isset($_POST['username'], $_POST['email'], $_POST['password'] , $_POST['password_confirm'], $_POST['mobile'] , $_POST['submit'])
    && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])
    && !empty($_POST['mobile'])&& !empty($_POST['submit'])
){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $mobile = $_POST['mobile'];

    #check valid username
    if(preg_match("/^[a-z0-9-_.]*$/i" , $username)){

        //Check username length
        if(has_length($username , ['min'=>3, 'max'=>50])){

             //Check if user exists in Database
            $stmt = $pdo->prepare("SELECT * FROM fancier WHERE username = :username");
            $stmt->bindValue(":username" , $username , PDO::PARAM_STR);
            $stmt->execute();
            if(!$stmt->rowCount()){
                
                //check if valid email
                if(filter_var($email , FILTER_VALIDATE_EMAIL)){

                    //check if email does not exists
                    $stmt = $pdo->prepare("SELECT * FROM fancier WHERE email = :email");
                    $stmt->bindValue(":email" , $email , PDO::PARAM_STR);
                    $stmt->execute();
                    if(!$stmt->rowCount()){
                        
                        //Check if Mobile number valid
                        if(preg_match('/^[+0-9]*$/' , $mobile)){
                            
                            //Check mobile number length 11-20
                            if(has_length($mobile , ['min'=>11 , 'max'=>20])){

                                //Check if Mobile number Exists
                                $stmt = $pdo->prepare("SELECT * FROM fancier WHERE mobile =:mobile");
                                $stmt->bindValue(":mobile" , $mobile , PDO::PARAM_STR);
                                $stmt->execute();
                                if(!$stmt->rowCount()){

                                    //check password length8-32
                                    if(has_length($password , ['min'=>8 , 'max'=>32])){

                                        //check if password match
                                        if($password === $password_confirm){

                                            //insert new user
                                            $password_hash = password_hash($password , PASSWORD_DEFAULT , ['cost'=>11]);
                                            $stmt = $pdo->prepare("INSERT INTO fancier (`username` , `email` , `password` , `mobile`)
                                                                    VALUES(:username , :email , :password , :mobile)");
                                            $stmt->bindValue(":username" , $username , PDO::PARAM_STR);
                                            $stmt->bindValue(":email" , $email , PDO::PARAM_STR);
                                            $stmt->bindValue(":password" , $password_hash , PDO::PARAM_STR );
                                            $stmt->bindValue(":mobile" , $mobile , PDO::PARAM_STR);
                                            $stmt->execute();
                                            if($stmt->rowCount()){
                                                echo "New fancier add succesfully";
                                            }else{
                                                echo "An error Occured, Can not add new Fancier";
                                            }

                                        }else{
                                            echo "Password Does not match!";
                                        }

                                    }else{
                                        echo "Password Should be between 8 To 32 Characters";
                                    }

                                }else{
                                    echo "Mobile Number Alredy Registerd With Another Account!";
                                }

                            }else{
                                echo "Mobile Number should be between 11 To 20 Numbers";
                            }

                        }else{
                            echo "Invalid Mobile Number!";
                        }

                    }else{
                        echo "Email already Taken!";
                    }


                }else{
                    echo "Invalid Email!";
                }

            }else{
                echo "Username Already exists";
            }



        }else{//End username lenght
            echo "Username should be between 3 Characters And 50 Character";
        }

    }else{
        echo "Invalid Username!";
    }

}else{
    echo "All Fields Required!";
}

?>