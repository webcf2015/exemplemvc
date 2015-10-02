<?php

class MaPDO extends PDO {

    private static $connection;

    // méthode
    public static function getConnection($dsn, $util, $pwd, $erreur = false) {

        if (!isset(self::$connection)) {

            try {

                self::$connection = new PDO($dsn, $util, $pwd);
                if ($erreur) {
                    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            } catch (PDOException $e) {

                echo $e;
            }
        }
        return self::$connection;
    }

}
