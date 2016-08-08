<?php
define('PATH_LOCAL', 'http://refcomunicacao.com.br/cliente/ded/testeland/');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,300,400italic,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>  

    <title>D&D Shopping - Bota Fora 2016</title>

    <link href="_css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="_css/slick.css">
    <link rel="stylesheet" type="text/css" href="_css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="_css/tinycarousel.css">
    <link rel="stylesheet" type="text/css" href="_css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <link rel="stylesheet" type="text/css" href="_css/index.css">
    <link rel="stylesheet" type="text/css" href="_css/scrolling-nav.css">
    <link rel="stylesheet" type="text/css" href="_css/index.css">
    <link rel="stylesheet" type="text/css" href="_css/responsive.css">
 
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700italic,700,400italic,100,100italic,300,300italic,900italic' rel='stylesheet' type='text/css'>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery.tcycle.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/accordion.js"></script>
  </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



<script  type="text/javascript">
  $(window).load(function() { 
        $('.sliderdelojas').bxSlider({
        onSliderLoad: function(){
            $(".sliderlojaswrap").css("visibility", "visible");
        },
          pagerCustom: '#lojaspager',
          autoControls: false,
          TouchEnabled: true,
          controls:false,
          mode:'fade',
          adaptiveHeight: true, 
          nextArrow: '<div class="nextslick"></div>',
          prevArrow: '<div class="prevslick"></div>',
        });
   });
</script>



  <script type="text/javascript">
    $(document).ready(function(){
     $('.slick').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 10,
        slidesToScroll: 10,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 6,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>

<header>
    <nav class="navbar navbar-default navbar-fixed-top barraheader" role="navigation" id="header">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle bottonNav" data-toggle="collapse" data-target=".navbar-ex1-collapse" id="botton">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://refcomunicacao.com.br/cliente/ded/testeland/"><img src="<?php echo PATH_LOCAL; ?>images/logoHeader.png" title="D&D Bota Fota" align-items="D&D Bota Fota " id="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-nav">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#produtos">Ofertas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#lojasslider">lojas participantes</a>
                    </li>
                    <li>
                        <a class="page-scroll" target="_blank" href="
https://www.google.com.br/maps/place/Shopping+D%26D/@-23.609027,-46.6970214,19.41z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!2sShopping+D%26D+-+Av.+Na%C3%A7%C3%B5es+Unidas,+12555+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04578-000!2m2!1d-46.6969585!2d-23.6090249!3m4!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!8m2!3d-23.6090249!4d-46.6969585?hl=pt-BR">vem pro d&d</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<section id="slidersection">
    <div class="tcycle">
      <div class="slider1index">
        <h1>
        Vou te contar<br/>
        em off: comprei<br/>
        no Bota Fora D&D<br/>
        com 50%. Off.
        </h1>
      </div>
      <div class="slider2index">
        <h1>
        Vou te contar<br/>
        em off: comprei<br/>
        no Bota Fora D&D<br/>
        com 50%. Off.
        </h1>
      </div>
    </div>
</section>

<section id="banner-bradesco">
  <div class="container">
    <div class="bradescobanner">
        <div class="tcycle bannerdesktablet">
          <img src="img/10x.png">
          <img src="img/banner-facas.png">
        </div>
        <div class="tcycle bannermobile">
          <img src="img/10xmobile.jpg">
          <img src="img/facasmobile.jpg">
        </div>
        <div class="conferirregulamento">
      <a class="condensed" href="" title="">CONFIRA O REGULAMENTO</a>
    </div>
    </div>
    
  </div>
</section>

<section id="produtos">
  <div class="container">
    <div class="mycontentfull">
    <h3 class="condensed">OFERTAS EM DESTAQUE</h3>
        <?php include("categorias-desk.php");?>
    </div>
  </div>  


<div id="accordion">
    <section>
      <h2 class="accordion-toggle"><a href="#" class="trig1">Test 1</a></h2>
      <div class="accordion-content">
        <p>slider 1</p>
        <ul class="bxslider44-mobile bx">
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
                if('cama mesa e banho' == $cat){
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
        <ul class="bxslider3999-mobile bx">
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
      

</section>

<section id="lojasslider">
  <div class="container">
  <div class="lojascall">
    <h3 class="condensed">As lojas participantes têm muito mais ofertas para você conhecer.</br>
    Venha ver cada uma delas no Bota Fora D&D.</h3>
  </div>

  <div id="lojaspager">
    <a data-slide-index="0" href="" title="">A</a>
    <a data-slide-index="1" href="" title="">B</a>
    <a data-slide-index="2" href="" title="">C</a>
    <a data-slide-index="3" href="" title="">D</a>
    <a data-slide-index="4" href="" title="">F</a>
    <a data-slide-index="5" href="" title="">G</a>
    <a data-slide-index="6" href="" title="">L</a>
    <a data-slide-index="7" href="" title="">M</a>
    <a data-slide-index="8" href="" title="">P</a>
    <a data-slide-index="9" href="" title="">S</a>
    <a data-slide-index="10" href="" title="">T</a>
    <a data-slide-index="11" href="" title="">X</a>
  </div>

  <div class="sliderlojaswrap">
  <ul class="sliderdelojas">

  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Alberflex">Alberflex</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Artefacto">Artefacto</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Asti-Marmore">Asti Marmore</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Brentwood">Brentwood</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/By-Kamy">By Kamy</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Clami">Clami</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Crissair">Crissair</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Dpot">Dpot</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Franccino">Franccino</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Gallery-By-Formato">Gallery By Formato</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Gattai">Gattai</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Le-Lis-Blanc-Casa">Le Lis Blanc Casa</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Lepri">Lepri</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Luri">Luri</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Maria">Maria</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Mekal">Mekal</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Mundo-do-Enxoval">Mundo do Enxoval</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Photo-Design">Photo Design</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Saccaro">Saccaro</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Santa-Monica">Santa Monica</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Sleep-House">Sleep House</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Spicy">Spicy</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Trend-Casual">Trend Casual</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Xhara">Xhara</a>
  </li>
  </ul>
  </div>
  </div>
</section>

<section id="aproveiteded">
<div class="container">
  <div class="vaeaproveite">
    <p class="condensed">Vá para o D&D Shopping e aproveite.</p> <a href="#" class="saibacomobtn condensed">SAIBA COMO</a>
  </div>
  <div class="footerlogo">
    <img src="img/dedfooter.png" alt="">
  </div>
</div>
<div class="container">
  <div class="textolegal opensans">
    <p>Imagens meramente ilustrativas. As ofertas não são válidas para lojas de alimentação e restaurantes. Descontos e estoques sujeitos à disponibilidade das lojas participantes do Bota Fora, instaladas no D&D Shopping. Período do Bota Fora: 21/07/2016 a 21/08/2016. Consulte os cartões elegíveis, lojas participantes, eventuais restrições e demais informações sobre a Campanha Bradesco em www.ded.com.br/regulamento.pdf. Condições válidas para compras realizadas nas máquinas da Cielo no período da promoção. *Parcelamento sujeito aos critérios de aprovação e elegibilidade do Banco Bradesco Cartões S.A. Consulte condições do parcelamento e parcela mínima nas lojas participantes. **Válido enquanto durarem os estoques. Limitado a 2 (dois) presentes por CPF.
  </p>
  </div>
 </div> 
</section>


<div class="rodape">
  <div class="container">
    <div class="row">
      <div class="conteudo conteudoRadape">
        <div id="textoRodape">
           |  D&D Shopping   –  AV. das Nações Unidas, 12.555  -  São Paulo • SP   –   Tel: +55 3043-9000  |
       </div>
       <div class="redes">
         <img src="img/iconfacebook-rodepe.png" id="redes">
         <img src="img/icon-insta-ropape.png" id="redes">
         <img src="img/icontw-ropdape.png" id="redes">
       </div>
     </div>
  </div>
</div>

</body>



</html>