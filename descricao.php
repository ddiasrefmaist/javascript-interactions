<?php
define('PATH_LOCAL', 'http://ded.com.br/botafora2016/');

echo $_SERVER['REQUEST_URI'];
$explode = explode('/', $_SERVER['REQUEST_URI']);

$n = count($explode);
$parametro = $explode[$n -1];
echo $parametro;

//echo $_SERVER['REQUEST_URI'];
$explode = explode('/', $_SERVER['REQUEST_URI']);

$n = count($explode);

//echo $URLPROD[1];
          $xml = new DOMDocument('1.0', 'UTF-8');
              $xml->preserveWhiteSpace = true;
              $xml->formatOutput = true;

              //Carregamos o XML
              $xml->load("SAM_REFT_27501.xml");
              $Nodes = $xml->getElementsByTagName('produto');

              //Aqui "dixavamos" o array nodes para pegar todos os atributos
              foreach($Nodes as $rows){
                $nome = ucfirst(strtolower($rows->getAttribute('nome')));
                //$nome = mb_convert_encoding($nome1,'ISO-8859-1',mb_detect_encoding($nome1,"UTF-8, ISO-8859-1, ASCII"));
                $img = $rows->getAttribute('img');
                $preco = $rows->getAttribute('preco');
                $x = explode(",", $preco);
                $nreais = $x[0];
                $ncents = $x[1];
                $promo = $rows->getAttribute('promo');
                $x1 = explode(",", $promo);
                $preais = $x1[0];
                $pcents = $x1[1];
                $desc = $rows->getAttribute('desc');
                $cor = $rows->getAttribute('cor');
                $loja = $rows->getAttribute('loja');
                $url_xml = $rows->getAttribute('url');
                $sn = $rows->getAttribute('shortname');
                if(!isset($explode[$n -1])){

                //  header("Location: index.php");

              }else{

               // $linkName = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
                $nomeLink = str_replace('-', ' ', $explode[$n -1]);
                if($nomeLink == $nome){

      ?>
<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Bota Fora D&D">
    <meta name="theme-color" content="#00233">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"                content="http://ded.com.br/botafora2016/" />
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="D&D Shopping | Bota Fora 2016" />
    <meta property="og:site_name" content="D&D Shopping | Bota fora 2016">
    <meta property="og:description"        content="Até 50% de desconto" />
    <meta property="og:image"              content="" />
    <meta property="og:image:type" content="image/jpeg">
    <meta name="Description" content=" <?php echo $sn; ?> De R$<?php echo $nreais.','.$ncents;?> por R$<?php echo $preais.','.$pcents;?>. Somente no Bota Fora D&D, Descontos em móveis de até 50%." >
    <title>D&D | <?php echo $sn;?></title>
    <!-- CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700italic,700,400italic,100,100italic,300,300italic,900italic' rel='stylesheet' type='text/css'>
    <link href="<?php echo PATH_LOCAL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/responsive.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/scrolling-nav.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/scrolling-nav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/responsive.css">

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

<script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '998191010254543');
      fbq('track', "PageView");</script>
      <noscript><img height="1" width="1" alt="FacebookPixelCode" style="display:none"
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

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Header -->
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
                <a class="navbar-brand page-scroll" href="http://ded.com.br/botafora2016/"><img src="<?php echo PATH_LOCAL; ?>images/logoHeader.png" title="D&D Bota Fota" align-items="D&D Bota Fota " id="logo" alt="Logo D&D Branco"></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-nav">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="<?php echo PATH_LOCAL; ?>#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo PATH_LOCAL; ?>#produtos">Ofertas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo PATH_LOCAL; ?>#lojasslider">lojas participantes</a>
                    </li>
                    <li>
                      <a class="page-scroll" target="_blank"  onclick="ga('send', 'event', 'clicou', 'visitarded');fbq('track', 'Lead');" href="
  https://www.google.com.br/maps/place/Shopping+D%26D/@-23.609027,-46.6970214,19.41z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!2sShopping+D%26D+-+Av.+Na%C3%A7%C3%B5es+Unidas,+12555+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04578-000!2m2!1d-46.6969585!2d-23.6090249!3m4!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!8m2!3d-23.6090249!4d-46.6969585?hl=pt-BR">vem pro d&d</a>
                  </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <!-- Fianl Header -->







<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <section  id="BgProdutos">
      <div class="container">
        <div class="row">
            <div class="link">
              <a href="http://ded.com.br/botafora2016/regulamento.pdf" onclick="ga('send', 'event', 'regulamento', 'landing');" target="_blank"><h5 id="textoLinkLojas"> regulamento </h5></a>
               <a href="<?php echo PATH_LOCAL.'ofertas/loja/'.$url_xml; ?>" title=" Voltar para a loja<?php echo $url_xml;?>">
                <h5 id="textoLinkLojas">
                  <?php echo $loja; ?>
                </h5>
              </a>
          </div>
        </div>
      </div>
      <div class="container" id="container">
      <hr>
      <div class="boxDescricao">
        <div class="imgDescricao"><img src="<?php echo PATH_LOCAL; ?><?php echo $img; ?>" class="imgDescricao" alt="foto <?php echo $nome; ?> da <?php echo $loja; ?>" title="<?php echo $sn; ?>"></div>
        <div class="boxDescricaoPro">
           <div class="boxtextoDcPro"><h1 class="textoDc"><?php echo $sn; ?></h1></div>
           <div class="boxtextoDcSub"><p class="textoDc"><?php echo $loja; ?></p></div>
           <?php if($loja != "Millo"){ ?>
             <div class="precoDeDc" id="precoDeDc"><p class="textoprecoDe">DE R$ <?php echo $nreais; ?><span>,<?php echo $ncents; ?></span></p></div>
             <div id="precoProDc" class="precoProDc">POR R$<?php echo $preais; ?><span>,<?php echo $pcents; ?></span></div>
           <?php }else{ ?>
             <div class="precoProDc">DESCONTOS DE 60%</div>
           <?php } ?>
            <div class="boxtextoDc">
              <h5 class="textoDcProduto"><?php echo $sn; ?>: <?php echo $desc; ?></h5>
            </div>
          <div class="btSaibaMaiasDc"><a  target="_blank" onclick="ga('send', 'event', 'clicou', 'visitarded');fbq('track', 'Lead');" href="https://www.google.com.br/maps/place/Shopping+D%26D/@-23.609027,-46.6970214,19.41z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!2sShopping+D%26D+-+Av.+Na%C3%A7%C3%B5es+Unidas,+12555+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04578-000!2m2!1d-46.6969585!2d-23.6090249!3m4!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!8m2!3d-23.6090249!4d-46.6969585?hl=pt-BR" class="bottonSaibamaisDc">Vem pro D&D</a></div>
            <div class="btCompartilharDc">
              <a id="facebookShareLink" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=560px,height=660px');return false;ga('send', 'event', 'Compartilhou', '<?php echo $nome ?>');" href="https://www.facebook.com/dialog/feed?app_id=1766851593532710&amp;display=popup&amp;caption=<?php echo $nome." R$".$preais.",".$pcents;?>&amp;link=http%3A%2F%2Fwwww.ded.com.br<?php echo $_SERVER['REQUEST_URI'];?>&amp;redirect_uri=http://www.ded.com.br/botafora2016/&amp;picture=<?php echo PATH_LOCAL; echo $img; ?>" href="https://www.facebook.com/dialog/feed?app_id=1766851593532710&amp;display=popup&amp;caption=<?php echo $sn." R$".$preais.",".$pcents;?>&amp;link=https%3A%2F%2Fwww.ded.com.br/botafora2016<?php echo $_SERVER['REQUEST_URI'];?>&amp;redirect_uri=http://www.ded.com.br/botafora2016/&amp;picture=<?php echo PATH_LOCAL; echo $img; ?>" class="bottonCompartilharDc alegreya"><img src="http://ded.com.br/botafora2016/img/facebook-letter-logo.png" alt="Facebook Botão Share">Compartilhe</a>
            </div>
      </div>
    </div>
  </div>
    </section>
  <div class="selowrapper">
    <div id="selo">
      <div class="logoBotafora">
       <img src="<?php echo PATH_LOCAL; ?>images/logoBotaFora.jpg" id="logoBotafora" title="D&D Bota Fota" alt="<?php echo $nome; ?>" align-items="D&D Bota Fota">
     </div>
   </div>
  </div>

    <?php

  }
}
}

?>
  <?php include("footer.php") ?>
