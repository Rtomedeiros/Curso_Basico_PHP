<?php
//Sessions são usados para armazenar dados do usuário.
//Exemplo de utilização de sessão é quando o usuário loga no sistema,
//grava-se o e-mail dele em uma sessão. Para que na próxima tela utilize-a
// para inserção no BD. E após isso remove-se a informação utilizada.

//Sessão é gravada no lado do servidor WEB, diferente do COOKIE que é gravado no 
//navegador do usuário.
// Informações sensíveis, como o e-mail, deve ser manipulado via SESSIONS.

session_start();
$_SESSION['email'] = "teste@teste.com.br";
$_SESSION['nome'] = "Abreu";

echo $_SESSION['email'] . "<br>";  // exibindo o email sem unset.
echo $_SESSION['nome'] . "<br>";

// Em alguns casos é preciso apagar da memória essa sessão
// podemos utilizar o método unset do PHP.

unset($_SESSION['email']);

echo $_SESSION['email'] . "<br>"; // tentando exibir o email após unset. NÃO IRÁ MOSTRAR.
echo $_SESSION['nome'] . "<br>";
