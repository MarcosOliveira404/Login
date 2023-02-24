
<?php
    $email = isset ($_POST["login"])?$_POST["login"]:"Invalido";
    $senha = isset ($_POST["senha"])?$_POST["senha"]:"Senha Invalida";

    if ($email = true && $senha = true){
        include '../Pagina/informacao.html';
        echo "okkk";
    }
    
?>
