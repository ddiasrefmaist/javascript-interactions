<?php
define('PATH_LOCAL', 'http://refcomunicacao.com.br/cliente/ded/testeland/');

echo $_SERVER['REQUEST_URI'];
$explode = explode('/', $_SERVER['REQUEST_URI']);

$n = count($explode);
$parametro = $explode[$n -1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#00233">

    <title>D&D | <?php if(empty($URLPROD[1])){echo $URL[1];}elseif(empty($URL[1])){echo str_replace('-', ' ', $_GET['loja']);} ?></title>
    <!-- CSS -->
    <meta property="og:url"                content="http://refcomunicacao.com.br/cliente/ded/testeland/" />
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="D&D Shopping | Bota Fora 2016" />
    <meta property="og:site_name" content="D&D Shopping | Bota fora 2016">
    <meta property="og:description"        content="Até 50% de desconto" />
    <meta property="og:image"              content="http://refcomunicacao.com.br/cliente/ded/testeland/images/logoBotaFora.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo PATH_LOCAL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/responsive.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/scrolling-nav.css" rel="stylesheet">
    <link href="<?php echo PATH_LOCAL; ?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/scrolling-nav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_LOCAL; ?>css/responsive.css">
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
                <a class="navbar-brand page-scroll" href="http://refcomunicacao.com.br/cliente/ded/testeland/"><img src="<?php echo PATH_LOCAL; ?>images/logoHeader.png" title="D&D Bota Fota" align-items="D&D Bota Fota " id="logo"></a>
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
                        <a class="page-scroll" target="_blank" onclick="ga('send', 'event', 'clicou', 'visitarded');fbq('track', 'Lead');" href="
https://www.google.com.br/maps/place/Shopping+D%26D/@-23.609027,-46.6970214,19.41z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!2sShopping+D%26D+-+Av.+Na%C3%A7%C3%B5es+Unidas,+12555+-+Itaim+Bibi,+S%C3%A3o+Paulo+-+SP,+04578-000!2m2!1d-46.6969585!2d-23.6090249!3m4!1s0x94ce5732d799a8e1:0x2340ba4e12ce4b1a!8m2!3d-23.6090249!4d-46.6969585?hl=pt-BR">vem pro d&d</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <!-- Fianl Header -->
