<?php
	include "libs/Controlador.php";
class Home extends Controlador{

	public function imprimir(){
		print_r($this->parametros);
	}

	public function index(){
		$this->cargarVista("index");
	}
	public function registrarCliente(){
		$this->cargarVista("RegistrarCliente");
	}
	public function registrarEmpresa(){
		$this->cargarVista("RegistrarEmpresa");
	}
	public function registrarProducto(){
		$this->cargarVista("RegistrarProducto");
	}
        public function comprarPujas(){
		$this->cargarVista("ComprarPujas");
	}
        public function registrarUsuario(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$apellido =$_POST["apellido"];
		$cedula=$_POST["cedula"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contrasena"];
		$aux=10;
		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insertUsuario("usuario", ["nombre" => $nombre, 
			"apellido" => $apellido, "cedula" => $cedula,"direccion" => $direccion, 
			"correo" =>$correo, "contrasena" => $contraseña,"telefono" =>$telefono, "pujas" =>$aux]);
	}
	$this->cargarVista("index");
	}

	public function registrarEmpresaBD(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contrasena"];

		$modelo=$this->cargarModelo("Empresa");
		$result=$modelo->insert("empresa", ["nombre" => $nombre,"telefono" =>$telefono
			,"direccion" => $direccion, "correo" =>$correo, "contrasena" => $contraseña]);
	}

	$this->cargarVista("index");
	}

	public function registrarProductoBD(){
		if ($_POST) {
		$nombre=$_POST["nombre"];
		$codigo=$_POST["codigo"];
		$precio=$_POST["precio"];
		$fechaF=$_POST["fechaF"];
		$fechaE=$_POST["fechaE"];
		$descri=$_POST["descri"];

		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insert("producto", 
			["nombre" => $nombre,"codigo" => $codigo,"precio" => $precio,
			"fechaFinal" => $fechaF,"fechaEntrega" => $fechaE,"descripcion" => $descri]);
	}
	$this->cargarVista("index");
	}
	

	public function login(){
		$username=$_POST["usuario"];
		$pass=$_POST["contraseña"];
		$modelo = $this->cargarModelo("Cliente");
		$respuesta = $modelo->authenticate($pass,$username);

		$modeloE=$this->cargarModelo("Empresa");
		$respuestaE = $modeloE->authenticate($pass,$username);

		if($respuesta != null && $respuesta->rowCount()>0 || $respuestaE != null && $respuestaE->rowCount()>0)
		{
			setcookie("chsm","logedin",time()+3600,"/");
			header("location: /subastaloDotCom/home/index");
			$this->cargarVista("index");
			exit();
		}
		else{
			echo "login fallido";
			$this->cargarVista("index");
		}
	}
	
	public function logout(){
		setcookie("chsm","",time()-3600, "/");
		header("location: /subastaloDotCom/home/index");
		//$this->cargarVista("index");
	}
}
?>