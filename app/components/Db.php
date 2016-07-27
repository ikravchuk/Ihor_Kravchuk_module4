<?php


namespace Module4\components;


class Db
{
    public static function getConnection()
    {

        $dbParams = include '../config/db_config.php';

        $dsn = "mysql:host={$dbParams['host']};dbname='{$dbParams['dbname']}";
        $user = $dbParams['user'];
        $password = $dbParams['password'];
        
        $db = new PDO($dsn, $user, $password);
        
        return $db;
    }
}