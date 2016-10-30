<?php
include ("clasesServicios.php");
$objetoEjemploPruebaClase=new servicios();
$resultado=$objetoEjemploPruebaClase->informacionActualServer("Mi hora actual en el servidor es:");
echo $resultado;
?>