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
      $nome = $_POST['nome'];
      $email = $_POST['email'];


      echo "<h3>Dúvida recebida senhor(a) {$nome}, retornaremos assim que possível para o e-mail {$email}!!! ;)</h3>"
    ?>

    <hr class="linhafooter">

    <?php
        include_once './include/footer.php';
    ?>

</html>
