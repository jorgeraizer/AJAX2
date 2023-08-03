<?php

$nome     = $_POST["nome"];
$idade    = $_POST["idade"];
$sexo     = $_POST["sexo"];
$telefone = $_POST["telefone"];
$email    = $_POST["email"];
$cidade   = $_POST["cidade"];

$empregados = [
    "nome"     => $nome,
    "idade"    => $idade,
    "sexo"     => $sexo,
    "telefone" => $telefone,
    "email"    => $email,
    "cidade"   => $cidade,
];

// Codifica os dados como JSON e envia de volta para a função JavaScript
$aluno = array('matricula' => $matricula, 'nome' => $nome);
echo ($json_texto);
?>
