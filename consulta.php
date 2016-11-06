<?php
    //Requerimiento de árchivo conexión
    require_once "conexion.php";

    //Clase Consultas que extendiende de conexión para realizar la conexión a la base de datos
    class Consultas extends Conexion
    {
        /**
         * constructor que extiende de conexión los parametros de conexión
         *
         * @var null
         * @return null
         **/
        public function __construct()
        {
            parent::__construct();
        }
        

        /**
         * función pública que será llamada para obtener datos del dispositivo de arduino
         *
         * @var $id string
         * @return Object
         **/
        public function obtenerDatos()
        {
			$resultado = $this->_db->query("SELECT * FROM usuarios");
			$valores   = $resultado->fetch_all(MYSQLI_ASSOC);
			return $valores;
            
        }
		
		public function consultarInformacion($nombre, $password)
		{
			$resultado = $this->_db->query('SELECT * FROM usuarios where nombre="'.$nombre.'" and password="'.$password.'"');
			$valores   = $resultado->fetch_all(MYSQLI_ASSOC);
			if(count($valores) > 0){
				return true;
			} else {
				return false;
			}			
		}
    }
?> 
