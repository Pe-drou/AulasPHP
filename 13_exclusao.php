<!-- Passar id via URL -->
<!-- http://localhost/php-basico-Alunos/13_exclusao.php?id=2-->

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


// Verifica se um id foi passado via URL para exclusão

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    // deleta o registro do cliente com o ID especificado
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno excluído com sucesso.";
    } else {
        echo "Erro ao excluir aluno: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>
