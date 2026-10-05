<?php

//inserindo arquivo de conexão
include "conexoa.php";

//verifica de os dados foram enviados pelo metodo post

if($_SERVER["REQUEST_METHOD"] == "POST"){

//trim remove esaços em branco na string

    $nome = trim ($_POST['nome']);
    $email = trim ($_POST['email']);
    $senha = $_POST['senha'];
    $tipo_perfil = trim ($_POST['tipo_perfil']);


    $_verificaEmail = "select usuario_id from tbl_usuarios where email = :email";
    $_preparaConsulta = $cn->prepare($_verificaEmail);
// seta "->" é usada prara ultilizar um metodo
    $_preparaConsulta->bindValue(':email',$email,PDO::PARAM_STR);
    $_preparaConsulta->execute();

}
if($_preparaConsulta->rowcount() > 0)
        echo"<script>
        
                alert('O email informado já esta cadastrado, tente fazer o login.');
                window.location.href="login.php";
                
            </script>
            

}



?>