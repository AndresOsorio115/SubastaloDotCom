<?php

class Modelo{

	protected $host = "localhost";
	protected $db_name = "proyecto";
	protected $username = "root";
	protected $password = "";
	protected $conexion;
	protected $nombretabla;


public function Modelo(){

try{

	$this->conexion = new PDO ("mysql:host={$this->host};dbname={$this->db_name}",$this->username,$this->password);

}catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
}

public function query($query){
	return $this->conexion->query($query);
}

public function insert($nombretabla, $params) {
	$query  =  "INSERT INTO $nombretabla SET ";
	$coma = "";
	foreach ( $params as $clave => $valor ) {
			$query .= $coma."$clave = '$valor'";
			$coma =",";
		}
//		echo $query;
		$this->query($query);	
//		print_r($this->conexion->errorInfo());
	}

	public function delete($nombretabla, $id){
		$query = "DELETE FROM $nombretabla WHERE id = $id";
//		echo $query;
		$this->query($query);

	}

	public function update($nombretabla, $id, $params){

		$query = "UPDATE $nombretabla SET ";
		$coma = "";
		foreach ($params as $clave => $valor) {
			$query .= $coma. "$clave = '$valor' ";
			$coma = ",";
		}
		$query.="WHERE id = $id";
//		echo $query;
		$this->query($query);
		
	}

}
?>