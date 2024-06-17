<?php

class BD{

    public static $instancia=null;
    
    public static function crearInstancia(){
    
        
            $usuario = "root";
            $password = "";
            $dsn = 'mysql:host=localhost;dbname=aplicacion';



        try{

            if( !isset(self::$instancia)){

                $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                
                self::$instancia = new PDO($dsn,$usuario ,$password, $opciones);

                return self::$instancia;
            }

        }

        catch(PDOException $e){
            echo "La conexión ha fallado" . $e->getMessage();
        }

    }


}

