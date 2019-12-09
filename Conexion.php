<?php
header("Content-Type: text/html;charset=utf-8");
class Conexion {
	private $conexion;
	function conectar(){ 
		$this->conexion = new mysqli("localhost","root","1234","michoacan2");
		if (mysqli_connect_errno()) {
			echo "no conecta";
			exit();
		}else{
			//$this->$conexion->set_charset("utf8");
			//echo "conectado";
		}
	}
	function transaccion(){
		$con = $this->conexion;
		$con->query("START TRANSACTION");
	}
	function lastId(){
		$con=$this->conexion;
		$resultado=$con->insert_id;
		return $resultado;
	}
	function commit(){
		$con = $this->conexion;
		$con->query("commit");
	}
	function rollback(){
		$co = $this->conexion;
		$co->query("rollback");
	}
	function select($query){
		$con = $this->conexion;
		//$con->set_charset("utf8");
		$resultado = $con->query($query);
		return $resultado;
	}
	function eliminar($query){
		$con = $this->conexion;
		$resultado = $con->query($query);
		return $resultado;
	}
	function escape($query){
		$con = $this->conexion;
		$resultado = $con->real_escape_string($query);
		return $resultado;
	}
	function insertar($qry){
		$con = $this->conexion;
		if ($con->query($qry)===TRUE) {
			/*$res=$con->query($qry);
			while($fila=$res->fetch_assoc()){

			}*/
			return 1;
		}else{
			return 0;
			
		}
	}

	function update($qry){
		$con = $this->conexion;
		if ($con->query($qry)===TRUE) {
			
			return 1;
		}else{
			return 0;
			
		}
	}
	
	function desconectar(){
		$con = $this->conexion;
		$con->close();
	}
}
date_default_timezone_set('America/Mexico_City');
?>