<?php

class BDDConnection {

    private static $pdo;

    private function __construct() {
        
    }

    public static function getConnection() {

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $ex) {
            print $ex->getMessage();
        }
    }

    public final static function getInstance() {
        if (!isset(self::$pdo)) {
            self::$pdo = new BDDConnection();
        }
        return self ::$pdo;
    }

}

?>
