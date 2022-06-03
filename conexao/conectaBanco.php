<?php
  
//LINK PARA USAR: http://localhost/conexao/conectabanco.php

//nome do servidor
$servername = "localhost";
  
// user do banco
$username = "root";
  
// Senha do banco
$password = "";
  
// Cria conexao
$conn = new mysqli($servername, 
            $username, $password);


$resultado=$conn->query("show databases");

while($row=$resultado->fetch_array()){
    print_r($row);
}
  
// Usa banco de dados 
$sql = "Use mysql";
if ($conn->query($sql) === TRUE) {
    echo "usando: mysql <br>";
    echo "BANCO DE DADOS CONECTADO ";
   
 
}else {
    echo "Erro ao conectar banco: " . $conn->error;
}
  
// Closing connection
$conn->close();
?>