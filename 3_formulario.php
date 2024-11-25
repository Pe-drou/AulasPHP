<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulário de cadastro</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">nome</label>
        <input type="text" name="nome" required>
        <label for="email">email</label>
        <input type="text" name="email" required>
        <label for="telefone">telefone</label>
        <input type="text" name="telefone">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        echo "<h2>Dados Recebidos:</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
    }
    
    ?>
</body>
</html>