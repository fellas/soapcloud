<?php
include_once("clasesServicios.php");
ini_set("soap.wsdl_cache_enabled", "0");
$directorioWSDL="directorioWsdl/miWsdl3.wsdl";
$parametros = array (
	//"uri"=>"http://cloudsoap-davidenq.rhcloud.com/",
	"soap_version"=>SOAP_1_1
);
$ObjetoServer = new SoapServer($directorioWSDL,$parametros);
$ObjetoServer->setClass("servicios");
$ObjetoServer->handle();
?>
