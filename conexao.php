<?php
class Conexao {
    public static $instance;
    
    public static function getConexao(){
        if(!isset(self::$instance)){
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=concessionaria","root","");
                self::$instance->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){

                die("Erro ao conectar: " . $e->getMessage());
            }
        } return self::$instance;
    }
    
    public static function closeConexao(){
        return self::$instance = null;
    }
}
