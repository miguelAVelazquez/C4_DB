<?php
/**
 * Created by Tavo.
 * Date: 10/06/2015
 * Time: 08:11 PM
 * CLASE QUE CONECTA A UNA BD MYSQL MEDIANTE PDO
 */
class Conexion
{
    protected static $dbDatabase = "l2_items";
    protected static $dbHost = "localhost";
    protected static $dbUsuario = "root";
    protected static $dbContrasena = "smtavo1991";
    private static $conexion = null;
    private static $opcionesDriver = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    public static function conectar()
    {
        if( null == self::$conexion )
        {
            try
            {
                self::$conexion = new PDO('mysql:host='. self::$dbHost .'; dbname='.self::$dbDatabase,self::$dbUsuario,self::$dbContrasena,self::$opcionesDriver);
                self::$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$conexion->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
            }
            catch(PDOException $ex)
            {
                die( $ex->getMessage() );
            }
        }
        return self::$conexion;
    }

    public static function desconectar()
    {
        self::$conexion = null;
    }
}