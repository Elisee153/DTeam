<?php
/**
 * 
 * User: @elisee
 * Date: 23/03/2020
 * 
 */
//>>>>>>>>>>>>>================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
if (!defined('DB_SERVER')) define('DB_SERVER', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'root');
if (!defined('DB_PWD')) define('DB_PWD', '');
if (!defined('DB_NAME')) define('DB_NAME', 'dteam');
if (!defined('DSN')) define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);
//>>>>>>>>>>>>>>===================>>>>>>>>>>>>>>>>>>>>>>>>>>>>

class connexion
{
    private static $resource;

    private function __construct()
    {
    }

    // Usage du Design Pattern Singleton
    public static  function getConnexion(){
        if (self::$resource==null){
            // En developpement
            self::$resource = new PDO (DSN,
                DB_USER,
                DB_PWD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            // En production
            /*
            self::$resource = new PDO (DSN,
                DB_USER,
                DB_PWD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_SILENT));
            */

            return self::$resource;
        } else{
            return self::$resource;
        }
    }

}