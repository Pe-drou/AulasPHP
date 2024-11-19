<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


$sql = "SELECT id, nome, email FROM clientes";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo "<h2> Lista de clientes cadastrados</h2>";

    echo "<table border='2'>";

        echo "tr><th>ID</th><th>Nome</th><th>Email</th><tr>";

        while($row = $result -> fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row["nome"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "</tr>";
        }
    echo "</table>";
} else {
    echo "Nenhum cliente cadastrado.";
}

// Fecha a conexão
$conn->close();
?>
