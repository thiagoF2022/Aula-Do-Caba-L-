<?php 

class database{

private $host = "localhost";
private $usuarios = "root";
private $senha = "";
private $banco = "Todo_List";

public $conn;
public function conectar(): mysqli{
$this->conn = new mysqli($this->host, $this->usuarios, $this->senha, $this->banco);

if($this->conn->connect_error){
 die("Deu erro: " . $this->conn->connect_error);
}
return $this->conn;
}
}
?>