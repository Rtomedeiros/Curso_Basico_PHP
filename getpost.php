<!DOCTYPE htlm>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>GET e POST no PHP</title>
</head>

<body>
    <!--Envio de dados.
    O método GET é para passar poucas ou pequenas informações.
    No GET os parâmetros são passados pela URL 
    O método POST é mais seguro, e tem uma capacidade melhor comparado ao GET,
    Pois ele não tem limite 
    POST há uma conexão paralela, os dados são passados por ela 
    Por conta do POST é possivel passar dados "invisiveis ao usuário, 
    ele portanto é mais seguro, pode ser usado por exemplo em sistemas de acesso
    restrito usando as SESSIONS-->

    <!--<form action="" method="GET">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit" value="enviar">
    </form> -->

    <form action="" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit" value="enviar">
    </form>

</body>

</html>

<?php

if ($_GET) {
    echo "<pre>"; //tag HTML representa texto pré-formatado.
    print_r($_GET);

    $login = $_GET['login'];
    $senha = $_GET['senha'];

    echo "login = " . $login . "<br>";
    echo "senha = " . $senha . "<br>";
}

if ($_POST) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    echo "login = " . $login . "<br>";
    echo "senha = " . $senha . "<br>";
}

?>