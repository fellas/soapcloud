<?php
include_once("clasesServicios.php");
ini_set("soap.wsdl_cache_enabled", "0");
$directorioWSDL="directorioWsdl/miWsdl2.wsdl";
$parametros = array (
	//"uri"=>"http://ejemplo2-soapcc.44fs.preview.openshiftapps.com/",
	"soap_version"=>SOAP_1_1
);
$ObjetoServer = new SoapServer($directorioWSDL,$parametros);
$ObjetoServer->setClass("servicios");
$ObjetoServer->handle();
?>
