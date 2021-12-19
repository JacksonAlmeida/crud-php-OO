<?php

namespace App\DbConfig;

use PDO;

class Connection
{

    private static $conn;

    public static function getConnection()
    {

        if (!isset(self::$conn)) :
            self::$conn = new \PDO('mysql:host=localhost;dbname=unimed;charset=utf8', 'root', '');
        endif;
        return self::$conn;
    }
}
