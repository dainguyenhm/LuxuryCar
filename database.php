<?php
class DB
{
    private static $db = NULL;

    public static function getConnection() {
      if (!isset(self::$db)) {
        try {
          self::$db = new PDO('mysql:host=localhost;dbname=luxurycardb','root', '');
          //self::$db = new PDO('mysql:host=localhost;port=3307;dbname=luxurycardb','root', '');

          self::$db->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$db;
    }

}
?>
