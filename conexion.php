<?php 
class Conexion
{
    protected $_db;
    public function __construct()
    {
        //$this->_db = new mysqli('localhost', 'nombre_usuario', 'password', 'nombre_base_de_datos');
        $this->_db = new mysqli('phpsoapcloud-davidenq.rhcloud.com', 'admindTAkP6y', 'u6Kbf5vZ6sSw', 'usuarios');
        if ( $this->_db->connect_error )
        {
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error;
            return;    
        }
    }
}
?> 
