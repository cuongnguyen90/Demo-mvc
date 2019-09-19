<?php


class DB
{
    private static $conn = NULL;

    public static function connect()
    {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO(HOST, USER, PASS);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        return self::$conn;
    }
}