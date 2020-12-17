<?php namespace App\Database;

use PDO;

class Connector {

    const DSN = "mysql:host=127.0.0.1;dbname=faldi_aldaham";
    const DATABASE_USERNAME = "root";
    const DATABASE_PASSWORD = "";

    private static $databaseConnection;

    private function __construct() {
    }

    public static function getInstance() {

        if (!self::$databaseConnection) {
            self::$databaseConnection = new PDO(
                self::DSN,
                self::DATABASE_USERNAME,
                self::DATABASE_PASSWORD
            );
        }

        return self::$databaseConnection;
    }
}