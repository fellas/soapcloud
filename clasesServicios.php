<?php
class servicios{
	var $verificacion;
	public function Seguridad($variablesSeguridad){
		$usuario="fernando";
		$password="fernando";
		
		$token_servidor=date("d");
		$token=$variablesSeguridad->UsernameToken->Id;
		$tokenUsuario = $variablesSeguridad->UsernameToken->Username->Id;
		$user = $variablesSeguridad->UsernameToken->Username->_;
		$token_clave = $variablesSeguridad->Password->Id;
		$pass_type = $variablesSeguridad->Password->Type;
		$pass = $variablesSeguridad->Password->_;
		if($token_servidor==$token && $tokenUsuario==$token_servidor."@usuario" && $user==$usuario && $token_clave==$token_servidor."@password" && $password==$pass && $pass_type!=''){
			$this->verificacion=true;
		}else{
			$this->verificacion=false;
		}
		
		
		
	}
	public function informacionActualServer($variable){
		$fecha = date("F j, Y, g:i:s a");
		$datos = $variable->mensaje." I| ".$fecha;
		// $objeto_respuesta=new stdClass();
		// $objeto_respuesta->out=$datos;
		// return $objeto_respuesta;
		$Mi_arreglo=array(
		"validacion_usuario"=>($this->verificacion==false)?"Error de Login":"Exito Login",
		"out"=>($this->verificacion==false)?"Error de login":$datos,
		);
		return $Mi_arreglo;
	}
}
?>
