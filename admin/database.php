<?php

class Database
{
    private static $dbHost = "127.0.0.1";
    private static $dbName = "burger_code";
    private static $dbUsername = "rooter";
    private static $dbUserpassword = "root";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              //self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
              $client = new MongoDB\Client(
                'mongodb+srv://user:user@pythonproject.d94wv.mongodb.net/?retryWrites=true&w=majority'
            );
            $db = $client->test;
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
