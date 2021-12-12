<?php
    include_once './include/dados.php';

    include_once './include/header.php';

$codigo = $_GET['cod'];

$value = $colecaoProdutos[$codigo];

echo "
    <div class=\"caixa__item\">
        <img class=\"imgproduto\" style=\"display:flex;float:left;border:10px solid blue;border-radius:25px;margin-left:30px;width:500px;height:500px;\" src=\"fotos/{$value['foto']}\" href=\"produto-detalhe.php\">
        <div class=\"caixa__texto\">
            <h5 style=\"font-size:30px;display:flex;position:relative;left:100px;\"><b>{$value['nome']}</b></h5><br>
            <h3 style=\"color:darkgreen;display:flex;position:relative;left:100px;\"><b>R$ {$value['preco']}</b></h3>
        </div>
    </div>
";

?>
    <input class="botaocomprar" type="submit" value="COMPRAR"></input>
<br>
<br>
<br>
<br>
<div class="descricao">
    <h5>Descrição do Produto:</h5>
    <p><?php echo $value['descricao']; ?></p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr class="linhafooter">
<?php
    include_once './include/footer.php';
?>