<?php
require_once('../private/config/db_config.php');



try{

    $pdo = new PDO($dsn , $credential['DB_USER'],$credential['DB_PASS'],$option);

}catch(PDOException $e){

    throw new PDOException($e->getMessage() , (int)$e->getCode());
}







?>