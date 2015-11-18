<?php

require_once 'Libs/Modelo.php';

class Empresa extends Modelo{

function __construct(){
 	parent::__construct();

 }

public function insertEmpresa($nombretabla, $params){
	$this->insert($nombretabla,$params);
}

function authenticate($contraseña,$correo){
	return $this->query("Select * from empresa where correo='$correo' and contrasena='$contraseña'");
	}
} 

?>