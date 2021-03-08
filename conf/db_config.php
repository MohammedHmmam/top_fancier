<?php

//Database Credentials


$credential = [
                "DB_DRIVER"  => 'mysql',
                "HOST"       => '127.0.0.1',
                "DB_NAME"    => 'top_fancier',
                "DB_USER"    =>  'root',
                "DB_PASS"    =>  '',
                "DB_CHARSET" => 'utf8'


];

#Database Source Name
$dsn = $credential['DB_DRIVER'].":host=".$credential['HOST'].
                                ";dbname=".$credential['DB_NAME'].";charset=".$credential['DB_CHARSET'];

#Set Connection option
$option = [

    PDO::ATTR_ERRMODE               =>  PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>  PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>  false

];

?>