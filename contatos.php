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

    <h1 class="trabalhe">CONTATOS</h1>
    
    <div id="formtrabalho" class="container">
        <div id="boxtrabalho" class="box">
            <form action="contatos-processa.php" method="POST" enctype="multipart/form-data">
                <label><b>Nome Completo:</b></label>
                <br>
                <input class="form" type="text" name="nome">
                <br>
                <br>
                <label><b>Data de Nascimento:</b></label>
                <br>
                <input class="form" type="text" name="idade" placeholder="DD/MM/AAAA">
                <br>
                <br>
                <label><b>Número de Contato:</b></label>
                <br>
                <input class="form" type="text" name="telefone">
                <br>
                <br>
                <label><b>E-mail:</b></label>
                <br>
                <input class="form" type="email" name="email">
                <br>
                <br>
                <label><b>Qual a sua dúvida?</b></label>
                <br>
                <textarea></textarea>
                <br>
                <br>
                <input class="buttontrab" type="submit" value="ENVIAR"></input>
            </form>
        </div>    
    </div>  

    <hr class="linhafooter">

    <?php
        include_once './include/footer.php';
    ?>
</html>