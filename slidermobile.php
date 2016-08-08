

<head>
  <meta charset="utf-8">
  <title>Hidden bxSliders</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.css">
  <style>
    #accordion section .accordion-content {
      display: none;
      padding: 0 30px 30px 30px;
    }
    #accordion section.active .accordion-content {
      display: block;
    }
    .bx img {
      margin: 0 auto;
      display: block;
    }
  </style>
</head>

<body>
  <div id="accordion">
    <section>
      <h2 class="accordion-toggle"><a href="#" class="trig1">Test 1</a></h2>
      <div class="accordion-content">
        <p>slider 1</p>
       <ul class="bxslider1-mobile bx">
          
           <?php
           $xml = new DOMDocument('1.0', 'UTF-8');
              $xml->preserveWhiteSpace = true;
              $xml->formatOutput = true;

              //Carregamos o XML
              $xml->load("SAM_REFT_27501.xml");
              $Nodes = $xml->getElementsByTagName('produto');

              //Aqui "dixavamos" o array nodes para pegar todos os atributos
              foreach($Nodes as $rows){
                $nome = ucfirst(strtolower($rows->getAttribute('nome')));
                $img = $rows->getAttribute('img');
                $preco = $rows->getAttribute('preco');
                $x = explode(",", $preco);
                $nreais = $x[0];
                $ncents = $x[1];
                $promo = $rows->getAttribute('promo');
                $x1 = explode(",", $promo);
                $preais = $x1[0];
                $pcents = $x1[1];
                $desc = ucfirst(strtolower($rows->getAttribute('desc')));
                $cat = strtolower($rows->getAttribute('categoria'));
                $cor = $rows->getAttribute('cor');
                $loja = ucfirst(strtolower($rows->getAttribute('loja')));
                
                $nname = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
                $nomeLink = str_replace(' ', '-', ucfirst(strtolower($nname)));

                

               // $linkName = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
               // $nomeLink = str_replace('-', ' ', $explode[$n -1]);
               
                if('conveniencia' == $cat){
                  
      ?>  
          
            <li>
                



        <div class="productwrapper">
          <div class="productphoto">
            <img src="<?php echo PATH_LOCAL; ?><?php echo $img; ?>" class="imgProdutos" alt="<?php echo $nome; ?>" title="">
          </div>
          <div class="productdesc">
            <div class="productcall">
              <div class="redstripe"><p class="opensans"><?php echo substr($nome, 0, strrpos(substr($nome, 0, 20), ' ')) ; ?></p></div>
              <div class="whitestripe"><p class="opensans"><?php echo $loja; ?></p></div>
            </div>
            <div class="productprice">
              <div class="precode"><p class="opensans">DE R$ <?php echo $nreais; ?><span>,<?php echo $ncents; ?></span></p></div>
              <div class="precopor"><p class="opensans">POR R$<span><?php echo $preais; ?></span>,<?php echo $pcents; ?></p></div>
            </div>
            <div class="boxfit">
              <a href="<?php echo PATH_LOCAL; ?>descricao/descricao/produto/<?php echo str_replace(' ', '-', $nome); ?>" class="saibamais">SAIBA MAIS</a>
              <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartilhar</a></div>
            </div>
            <div class="disponivel alegreya" >Disponível na <?php echo $loja; ?></div>
             <a style="padding:0px 5px 0px 5px;" href="<?php echo PATH_LOCAL; ?>descricao/descricao/produto/<?php echo $nomeLink; ?>" class="bottonSaibamais" title="Saber mais sobre <?php echo $nome; ?>">
              Saiba mais
            </a>
          </div>
        </div>



            </li>
            <?php

  }

}

?>
          </ul>
      </div>
    </section>
    <section>
      <h2 class="accordion-toggle"><a href="#" class="trig2">Test 2</a></h2>
      <div class="accordion-content">
        <p>slider 2</p>
        <ul class="bxslider2-mobile bx">
          <li>
            <img src="http://cache1.asset-cache.net/xd/513331420.jpg?v=1&c=IWSAsset&k=2&d=2DF30557A92EF68A79FB2FAE5DFF30DA4E7679DD01108BC64BBAD824103B0C3B9D10438B022685F4">
          </li>
          <li>
            <img src="http://www.rantsports.com/clubhouse/files/2015/03/Arianny-Celeste-7.jpg">
          </li>
          <li>
            <img src="http://breakingenergy.com/wp-content/uploads/sites/2/2013/04/72410727.jpg">
          </li>
        </ul>
      </div>
    </section>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.3/jquery.bxslider.min.js"></script>

  <script>
    var bx1 = $('.bxslider1-mobile').bxSlider({
      auto: true,
      pause: 2000,
      autoHover: true,
      pager: false
    });

    var bx2 = $('.bxslider2-mobile').bxSlider({
      auto: true,
      pause: 2000,
      autoHover: true,
      pager: false
    });

    $('a.trig1').on('click', function(e) {
      e.preventDefault();
      setTimeout(function() {
        bx1.redrawSlider();
      }, 0);
    });

    $('a.trig2').on('click', function(e) {
      e.preventDefault();
      setTimeout(function() {
        bx2.redrawSlider();
      }, 0);
    });


    $('.accordion-toggle').click(function(e) {
      e.preventDefault();
      $(this).parent().toggleClass('active');
      $('#accordion section').not($(this).parent()).removeClass('active');
    });
  </script>
</body>
