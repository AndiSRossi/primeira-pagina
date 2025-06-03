<?php 

function valida_login($login, $senha){
    // validar direto em um banco de dados.

    $login_bd = 'andersrossi';
    $senha_bd = '0123456';

    if($login === $login_bd){
        if($senha === $senha_bd){
            return true;

        }else{
            echo "Senha inválida";
        }

    }else{
        echo "Usuário inexistente!";
    }
}

?>