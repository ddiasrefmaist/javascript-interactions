<?php
define('PATH_LOCAL', 'http://www.ded.com.br/botafora2016/');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"                content="http://ded.com.br/botafora2016//" />
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="D&D Shopping | Bota Fora 2016" />
    <meta property="og:site_name" content="D&D Shopping | Bota fora 2016">
    <meta property="og:description"        content="Até 50% de desconto" />
    <meta property="og:image"              content="" />
    <meta property="og:image:type" content="image/jpeg">
    <meta content=" Aproveite todos os descontos do Bota Fora D&D, Descontos em móveis de até 50%; " name="description">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,300,400italic,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700italic,700,400italic,100,100italic,300,300italic,900italic' rel='stylesheet' type='text/css'>
    <title>D&D Shopping - Bota Fora 2016</title>
    <link href="_css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="_css/slick.css">
    <link rel="stylesheet" type="text/css" href="_css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="_css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <link rel="stylesheet" type="text/css" href="_css/scrolling-nav.css">  
    <link rel="stylesheet" type="text/css" href="_css/index.css">
    <link rel="stylesheet" type="text/css" href="_css/responsive.css">
      </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


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
                <a class="navbar-brand page-scroll"  href="http://ded.com.br/botafora2016/"><img src="<?php echo PATH_LOCAL; ?>images/logoHeader.png" title="D&D Bota Fota" align-items="D&D Bota Fota " id="logo"></a>
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
                        <a class="page-scroll" target="_blank"  onclick="ga('send', 'event', 'clicou', 'visitarded');" href="
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
        <div class="bannerdesktablet">
            <a class="condensed"  href="http://ded.com.br/botafora2016/regulamento.pdf" target="_blank" title=""><img id="banner10" src="img/10x.png"></a>
        </div>
        <div class="tcycle bannermobile">
          <img src="img/10xmobile.jpg">
            <a class="condensed"  href="http://ded.com.br/botafora2016/regulamento.pdf" target="_blank" title=""><img src="img/facasmobile.jpg"></a>
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
    <a data-slide-index="4" href="" title="">G</a>
    <a data-slide-index="5" href="" title="">H</a>
    <a data-slide-index="6" href="" title="">I</a>
    <a data-slide-index="7" href="" title="">L</a>
    <a data-slide-index="8" href="" title="">M</a>
    <a data-slide-index="9" href="" title="">P</a>
    <a data-slide-index="10" href="" title="">Q</a>
    <a data-slide-index="11" href="" title="">S</a>
    <a data-slide-index="12" href="" title="">T</a>
    <a data-slide-index="13" href="" title="">X</a>
  </div>

  <div class="sliderlojaswrap">
  <ul class="sliderdelojas">

  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Alberflex">Alberflex</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Artefacto">Artefacto</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Asti-Marmores">Asti Marmores</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Adresse">Adresse</a>
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
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Gallery-By-Formato">Gallery By Formato</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Gattai">Gattai</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Homa">Homa Store</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Indusparquet">Indusparquet</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Le-Lis-Blanc-Casa">Le Lis Blanc Casa</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Luri">Luri</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Lilibee">Lilibee</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Maria-pia-casa">Maria Pia Casa</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Mekal">Mekal</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Millo">Millo</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Mundo-do-Enxoval">Mundo do Enxoval</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Photo-Design">Photo Design</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Quaker">Quaker Decor</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Saccaro">Saccaro</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Santa-Monica">Santa Monica</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Sleep-House">Sleep House</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Spicy">Spicy</a>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Spot">Spot</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Trend-Casual">Trend Casual</a>
  </li>
  <li>
    <a class="lojadoslider" href="<?php echo PATH_LOCAL; ?>ofertas/loja/Xhara">Xhara C&C</a>
  </li>
  </ul>
  </div>
  </div>
</section>

<section id="aproveiteded">
<div class="container">
  <div class="vaeaproveite">
    <p class="condensed">Vá para o D&D Shopping e aproveite.</p> <a target="_blank" href="https://www.google.com.br/maps/place/Shopping+D%26D/@-23.609027,-46.6970214,19.41z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!2sShopping+D%26D+-+Av.+Na%C3%A7%C3%B5es+Unidas,+12555+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04578-000!2m2!1d-46.6969585!2d-23.6090249!3m4!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!8m2!3d-23.6090249!4d-46.6969585?hl=pt-BR" class="saibacomobtn condensed">SAIBA COMO</a>
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
         <a href="https://www.facebook.com/ddshopping/?fref=ts" target="_blank"><img src="img/iconfacebook-rodepe.png" id="redes"></a>
          <a href="https://www.instagram.com/dedshopping/?hl=pt-br" target="_blank"> <img src="img/icon-insta-ropape.png" id="redes"></a>
          <a href="https://twitter.com/dedshopping?lang=pt" target="_blank"><img src="img/icontw-ropdape.png" id="redes"></a>
       </div>
     </div>
  </div>
</div>

    <script src="js/gulpfied/pipe.min.js"></script>
    
    <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '998191010254543');
      fbq('track', "PageView");</script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=998191010254543&ev=PageView&noscript=1"/>
    </noscript>
    <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-72777028-1', 'auto');
       ga('send', 'pageview');

      </script>
<!-- Hotjar Tracking Code for http://refmait.com.br -->
<script>
   (function(h,o,t,j,a,r){
       h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
       h._hjSettings={hjid:253981,hjsv:5};
       a=o.getElementsByTagName('head')[0];
       r=o.createElement('script');r.async=1;
       r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
       a.appendChild(r);
   })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

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
    $(function(){
        $("#accordion").accordion({
            header: '.event',
             collapsible: true,
             heightStyle: "content",
             active: false,
             autoHeight: false,
        });
    });

 });

</script>

<script type="text/javascript">
    $(document).ready(function(){
     $('.slick').slick({
        dots: false,
        autoplay: true,
        infinite: false,
        slidesToShow: 10,
        slidesToScroll: 1,
        adaptiveHeight:true,
        lazyLoad: 'progressive',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>


<script type="text/javascript" >
  
$(document).ready(function(){
if (window.matchMedia('(max-width: 10px)').matches)
    {
       
    }

    else {
        

   $(function() {
     var slider2_initialized = false;
     var slider3_initialized = false;
     var slider4_initialized = false;
     var slider5_initialized = false;
     var slider6_initialized = false;
     
     $( "#tabs" ).tabs({
         activate: function( event, ui ) {
            //console.log("ui = ");console.log(ui);
            var tab_id = $(ui.newPanel).attr('id');//alert(tab_id);
            
            if(tab_id == "tabs-2" && slider2_initialized == false)
            {    
                $('.bxslider2').bxSlider({
                    pagerCustom: '#bx-pagerc2',
                    autoControls: true,
                    TouchEnabled: false,
                }); 
                //update initialization flag to true
                slider2_initialized = true;
            }
            else if(tab_id == "tabs-3" && slider3_initialized == false)
            {    
                $('.bxslider3').bxSlider({
                         pagerCustom: '#bx-pagerc3',
                          autoControls: true,
                    TouchEnabled: false,
                }); 
                //update initialization flag to true
                slider3_initialized = true;
            }
            else if(tab_id == "tabs-4" && slider4_initialized == false)
            {    
                $('.bxslider4').bxSlider({
                         pagerCustom: '#bx-pagerc4',
                          autoControls: true,
                    TouchEnabled: false,
                }); 
                //update initialization flag to true
                slider4_initialized = true;
            }
            else if(tab_id == "tabs-5" && slider5_initialized == false)
            {    
                $('.bxslider5').bxSlider({
                         pagerCustom: '#bx-pagerc5',
                          autoControls: true,
                    TouchEnabled: false,
                }); 
                //update initialization flag to true
                slider5_initialized = true;
            }
            else if(tab_id == "tabs-6" && slider6_initialized == false)
            {    
                $('.bxslider6').bxSlider({
                         pagerCustom: '#bx-pagerc6',
                          autoControls: true,
                    TouchEnabled: false,
                }); 
                //update initialization flag to true
                slider6_initialized = true;
            }
         }
     });
     
$('.bxslider7').bxSlider({
          pagerCustom: '#bx-pagerc7',
          autoControls: false,
});     
});
   
    }

    return  false;
});


</script>


</body>



</html>
