<?php include("header.php") ?>
    <!-- Links Lojas -->


    <section  id="BgProdutos">
      <div class="container">
        <div class="row">
          <div class="boxTexto">
            <h1>
              Descubra o que selecionamos de melhor na <?php echo $_GET['loja']; ?> e vá direto para o D&D Shopping.
            </h1>
            <img src="img/logospicy.png" id="logoSpicy" alt="Spicy" title="Spicy">
          </div>
          <?php

          $xml = new DOMDocument('1.0', 'UTF-8');
              $xml->preserveWhiteSpace = true;
              $xml->formatOutput = true;

              //Carregamos o XML
              $xml->load("xml.xml");
              $Nodes = $xml->getElementsByTagName('produto');

              //Aqui "dixavamos" o array nodes para pegar todos os atributos
              foreach($Nodes as $rows){
                $nome = $rows->getAttribute('nome');
                $img = $rows->getAttribute('img');
                $preco = $rows->getAttribute('preco');
                $x = explode("," $preco);
                $nreais = $x[1];
                $ncents = $x[2];
                $promo = $rows->getAttribute('promo');
                $desc = $rows->getAttribute('desc');
                $cor = $rows->getAttribute('cor');
                $loja = $rows->getAttribute('loja');
                if(!isset($_GET['loja'])){

                  header("Location: index.php");

              }else{
                if($_GET['loja'] == $loja){
      ?>
              <div class="conteudo" id="boxProdutos">
                <div class="boxProdutos">
                  <img src="<?php echo $img; ?>" class="imgPortutos" alt="<?php echo $nome; ?>" title="">
                  <div class="boxtextoProduto"><p class="textoProduto"><?php echo $nome; ?></p></div>
                  <div class="boxsubProduto"><p class="textoProduto"><?php echo $loja; ?></p>
                  <div class="precodeDe" id="preco"><p class="textoprecoDe">DE R$ <?php echo $nreais; ?><span>,<?php echo $ncents; ?></span></p></div>
                   <div id="precoPor" class="textoprecoPor">Por R$<p class="precodePor">9.855<span>,00</span> </p> </div>
                  </div>
                   <div class="btSaibaMaias"><button class="bottonSaibamais">Saiba mais</button></div>
                   <div class="btCompartilhar"><button class="bottonCompartilhar">Compartilhe</button></div>
                </div>

    <?php

  }

}
}

?>
</div>
</div>
</section>
  <?php include("footer.php") ?>
