<?php

require_once 'Libs/Modelo.php';

class Cliente extends Modelo
{

 function __construct(){
 	parent::__construct();

 }

public function insertUsuario($nombretabla, $params){
	$this->insert($nombretabla,$params);
}

public function authenticate($contraseña,$correo){
	 	return $this->query("Select * from usuario where contrasena='$contraseña' and correo='$correo'");
	}



public function consulta(){
	return $this->query("Select * from producto");
}

}
?>