<?php
session_start();

if ($_SESSION["logado"] !== true) {
    echo "<img src='http://d26lpennugtm8s.cloudfront.net/stores/326/795/products/design-sem-nome1-7c696f2c6443e3bdbb15303050985851-640-0.jpg'>";
    exit;
}

if (isset($_REQUEST["logout"]) && $_REQUEST["logout"]) {
    session_destroy();
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Autenticação</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Olá <?= $_SESSION["nome"] ?>, bem vindo!</h1>

O seu e-mail é <?= $_SESSION["email"] ?>

<a href="areaRestrita.php?logout=1">SAIR</a>
</body>
</html>