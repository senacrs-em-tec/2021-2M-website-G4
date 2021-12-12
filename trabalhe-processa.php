<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $curriculo = $_FILES['curriculo'];
    print_r($curriculo);
    $num = rand(1, 9999);
    $pasta = "Curriculos/";
    $temporario = $_FILES['curriculo']['tmp_name'];
    $extensao = pathinfo($_FILES['curriculo']['name'], PATHINFO_EXTENSION);
    $nomeTemp = $num.'.'.$extensao;
    move_uploaded_file($temporario, $pasta.$nomeTemp);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>CTI eletrônicos</title>
  </head>

    <?php
        include_once './include/dados.php';

        include_once './include/header.php';
    ?>

    <?php
        if (empty($nome))
            echo "<h5>Preencha o seu nome</h5><br>";  
        elseif (!empty($nome)) 
            echo "<h5>Nome preenchido com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($idade))
            echo "<h5>Preencha a sua data de nascimento</h5><br>";  
        elseif (!empty($idade)) 
            echo "<h5>Data de nascimento preenchida com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($telefone))
            echo "<h5>Preencha o seu número de contato</h5><br>";  
        elseif (!empty($telefone)) 
            echo "<h5>Número de contato preenchido com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($email))
            echo "<h5>Preencha o seu e-mail</h5><br>";  
        elseif (!empty($email)) 
            echo "<h5>E-mail preenchido com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($estado))
            echo "<h5>Preencha o seu estado</h5><br>";  
        elseif (!empty($estado)) 
            echo "<h5>Estado preenchido com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($cidade))
            echo "<h5>Preencha a sua cidade</h5><br>";  
        elseif (!empty($nome)) 
            echo "<h5>Cidade preenchida com sucesso</h5><br>"; 
    ?>

    <?php
        if (empty($curriculo))
            echo "<h5>Envie seu currículo</h5><br>";  
        elseif (!empty($curriculo)) 
            echo "<h5>Currículo enviado com sucesso</h5><br>"; 
    ?>

    <hr class="linhafooter">

    <?php
        include_once './include/footer.php';
    ?>

</html>