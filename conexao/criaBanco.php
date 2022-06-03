<?php

//LINK PARA USAR: http://localhost/conexao/criabanco.php

//nome do servidor
$servername = "localhost";
  
// user do banco
$username = "root";
  
// Senha do banco
$password = "";
  
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password);
 
  
// Cria dabase com o nome: infoCandido1
$sql = "CREATE DATABASE infoCandido1";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado: infoCandidou1";
} else {
    echo "Erro ao criar banco: " . $conn->error;
}
  
// Closing connection
$conn->close();
?>