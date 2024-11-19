<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h2>Tela de cadastro</h2>
    <!-- método POST -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];

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

    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
            echo "Cliente cadastrado com sucesso!";
    } else {
        echo "<p style='color: red'>Erro ao cadastrar cliente: " . $conn->error . "</p>";
    }
    $conn->close();
}
    ?>
</body>
</html>
