<?php

class Banco
{
    private static $dbNome = 'monitoramento';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}


class Banco2
{
    private static $dbNome2 = 'monitoramento';
    private static $dbHost2 = 'localhost';
    private static $dbUsuario2 = 'root';
    private static $dbSenha2 = '';
    
    private static $cont2 = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost2.";"."dbname=".self::$dbNome2, self::$dbUsuario2, self::$dbSenha2); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont2;
    }
    
    public static function desconectar()
    {
        self::$cont2 = null;
    }



}
?>
