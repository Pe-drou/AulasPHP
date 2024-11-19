<!-- Para criar o Banco de Dados -->
<!-- CREATE DATABASE exercicio; -->
<!-- USE exercicio; -->

<!-- Para criar a Tabela -->
<!-- 
    CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
    ); 
-->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

try{
    // tenta criar uma conexão com o banco de dados
    // verifica se os dados estão corretos
    $conn = new mysqli($servername, $dbname, $username, $password);


    // verifica se houve erros de conexão
    if ($conn->connect_error) {
        throw new Exception("Falha na conexçao: " . $conn->connect_error);
    }

    echo "Conectado com sucesso";

} catch (Exception $e) {
    // exibe uma mensagem de rro amigável
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>




