<?php

class DB{
    protected static $host;
    protected static $user;
    protected static $pass;
    protected static $db_name;

    public static function dbConnect(){
        self::$host = 'localhost';
        self::$user = 'root';
        self::$pass = '';
        self::$db_name = 'tareas_tp';

        $con = new mysqli(self::$host,self::$user,self::$pass,self::$db_name) or die ('Error en la conexión de la base de datos');
        return $con;
    }
}
?>