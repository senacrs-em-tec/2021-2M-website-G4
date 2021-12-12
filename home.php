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

    <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/carrossel2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel3.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <br>

    <?php
      include_once './include/menu.php';
    ?>

    <div class="cards">
      <!-- A card with given width -->
      <?php
        foreach ($colecaoProdutos as $value) {
          echo "
          <div class=\"cards__item\">
            <img style=\"width:200px;height:200px;\" src=\"fotos/{$value['foto']}\">
            <h3>R$ {$value['preco']}</h3>
            <a class=\"produtos\" href=\"produto-detalhe.php?cod={$value['codigo']}\"><h5>{$value['nome']}</h5></a>
          </div>
          ";
        }
      ?>
    </div>
  
    <hr class="linhafooter">

    <?php
      include_once './include/footer.php';
    ?>

</html>