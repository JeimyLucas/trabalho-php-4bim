<?php
    $servidor = "localhost"; // servidor local
    $usuario = "root"; // usuario do servidor mysql
    $senha = ""; // senha do servidor mysql
    $banco = "db_agencia_empregos"; // nome do banco

try
{
    $cn = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario,$senha);

    // echo "Conexão realizada com sucesso!";
}
catch(PDOException $erro) // Quando ocorre erro, o PHP cria automaticamente um objeto
{
    echo "Erro ao conectar: " . $erro->getMessage(); // getMessage() é um método da classe PDOException.
}

?>
