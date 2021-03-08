<?php
require_once('conf/db_config.php');
// global $credential;
// global $dsn;
// global $option;

class Connect{

    private static $_conn ;
    private static $_dsn; 
    private static $_db_user ;
    private static $_db_password ;
    private static $_conn_options ;
    
    //$credential['DB_USER']
    // $credential['DB_PASS']
    // $option

    //get dsn value
    private static function get_dsn(){
        return self::$_dsn;
    }

    //set dsn value
    private static function set_dsn($dsn){
        self::$_dsn = $dsn;
    }

    //get database username value
    private static function get_db_user(){
        return self::$_db_user ;
    }

    //set database username value value
     private static function set_db_user($credential){
        self::$_db_user = $credential['DB_USER'];
    }

     //get database password value
     private static function get_db_pass(){
         return self::$_db_password ;
    }

     //set database password value
    private static function set_db_pass($credential){
         self::$_db_password = $credential['DB_PASS'];
    }

    //get Database options
    private static function get_db_options(){
        return self::$_conn_options;
    }
    //Set Database connection options
    private static function set_db_options($option){
        self::$_conn_options = $option;
    }

    private  function __construct(){
        global $dsn;
        global $credential;
        global $option;
        self::set_dsn($dsn);
        self::set_db_user($credential);
        self::set_db_pass($credential);
        self::set_db_options($option);
        try{

            self::$_conn = new PDO(self::get_dsn(),self::get_db_user() ,
                                     self::get_db_pass(),self::get_db_options());

        }catch(PDOException $e){
            throw new PDOException($e->getMessage() , (int)$e->getCode());

        }
        return self::$_conn;

    }


    public static function db_connect(){

        $pdo = new self();
        return $pdo;

    }


}


?>