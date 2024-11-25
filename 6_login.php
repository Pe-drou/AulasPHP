<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuário</title>
</head>
<body>
    <h1>Faça o login com o usuário cadastrado</h1>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $arquivo = fopen('usuarios.txt', 'r');
        $login_sucesso = false;

        while (($linha = fgets($arquivo)) !== false){
            list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

            if($nome == $usuario_arquivo && $senha == $senha_arquivo){
                $login_sucesso = true;
                break;
            }
        }

        fclose($arquivo);

        if($login_sucesso){
            echo "<h3>Login realizado com sucesso! Bem-vindo, $nome!";
        } else {
            echo "<h3 Style='color: red'>Usuário ou senha incorreto<h3>";
        }
    }
    ?>
</body>
</html>
