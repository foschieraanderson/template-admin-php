<?php

    abstract class Connection 
    {    
        
        private static $conn;

        private static $host     = '127.0.0.1';
        private static $dbname   = 'blog_admin';
        private static $user     = 'root';
        private static $password = '';

        public static function getConn()
        {
            if(!self::$conn) {

                try {
                    self::$conn = new PDO('mysql: host='.self::$host.'; dbname='.self::$dbname.'', self::$user, self::$password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* Exibe os erros caso exista. */
                } catch (PDOException $e) { /* Atribui as exception à variável $e */
                    echo 'ERROR: ' . $e->getMessage();
                }
            }
            
            return self::$conn;
        }
    }

?>
