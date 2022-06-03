<?php

function conecta(){
    $mysqli_connection = new MySQLi('HOST', 'USUARIO', 'SENHA', 'BASE');
    if($mysqli_connection->connect_error){
       echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
    }else{
       echo "Conectado!";
    }
}

?>