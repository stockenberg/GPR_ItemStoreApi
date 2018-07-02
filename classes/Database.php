<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 02.07.18
 * Time: 10:29
 */

namespace classes;


trait Database
{
    /**
     * @var \PDO $db
     */
    private static $db;

    /**
     * Initial DB Connection
     */
    private static function connect()
    {
        try {
            self::$db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS,
                array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Gets from Database (SELECT) with $SQL and ExecArr
     * Fetch Data Associative from Database
     * @param String $SQL
     * @param array $execArr
     * @return array
     */
    public static function get(String $SQL, Array $execArr = [])
    {
        self::connect();
        $stmt = self::$db->prepare($SQL);
        try{
            $stmt->execute($execArr);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    /**
     * Writes into Database (UPDATE, DELETE, INSERT statements) and gets SQL and ExecArray
     * @param String $SQL
     * @param array $execArr
     */
    public static function set(String $SQL, Array $execArr = [])
    {
        self::connect();
        $stmt = self::$db->prepare($SQL);
        try{
            $stmt->execute($execArr);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }


}