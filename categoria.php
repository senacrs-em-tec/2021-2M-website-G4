<?php

include_once './include/dados.php';

include_once './include/header.php';

?>

    <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/carrossel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel3.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <br>


<?php

include_once './include/menu.php';

$categoria = $_GET['cat'];

foreach ($colecaoProdutos as $value) {
    $catProduto = $value['categoria'];

    if ($categoria == $catProduto) {
        echo "
        <div class=\"cards__item\">
            <img style=\"width:200px;height:200px;\" src=\"fotos/{$value['foto']}\">
            <h3>R$ {$value['preco']}</h3>
            <a class=\"produtos\" href=\"produto-detalhe.php?cod={$value['codigo']}\"><h5>{$value['nome']}</h5></a>
        </div>
        ";
    }
  }

?>

<hr class="linhafooter">

<?php
include_once './include/footer.php';

?>

