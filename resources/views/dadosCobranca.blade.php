<?php
    require "helpers.php";

    if ($_REQUEST) {
        // pegando os dados do form
        $nome = $_REQUEST['nome'];
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];
        $confirmarSenha = $_REQUEST['confirmarSenha'];

        // montando um array com os dados do form
        $novoUsuario = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $senha,
            "confirmarSenha" => $confirmarSenha
        ];

        // leitura do arquivo
        $usuariosJson = file_get_contents("usuarios.json");

        // transforma o json aberto em array
        $usuariosArray = json_decode($usuariosJson, true);

        // Adiciona o novo usuário no array
        array_push($usuariosArray["usuarios"], $novoUsuario);

        // transforma o array novamente em json
        $dadosFinais = json_encode($usuariosArray);

        //salva os dados no arquivo
        $salvou = file_put_contents("usuarios.json", $dadosFinais);

        return $salvou;
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

<?php
    if (isset($salvo) && $salvo === true) {
        echo "Usuário cadastrado com sucesso!";
    }
?>

<form action="index.php" method="post">
    <div class="field">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="field">
        <label>Cartão:</label>
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
    </div>
    <div class="field">
        <label>Endereco:</label>
        <input type="password" name="senha" placeholder="Digite seu senha" required>
    </div>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>