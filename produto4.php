

<?php
           $xml = new DOMDocument('1.0', 'UTF-8');
              $xml->preserveWhiteSpace = true;
              $xml->formatOutput = true;

              //Carregamos o XML
              $xml->load("SAM_REFT_27501.xml");
              $Nodes = $xml->getElementsByTagName('produto');

              //Aqui "dixavamos" o array nodes para pegar todos os atributos
              foreach($Nodes as $rows){
                $nome = $rows->getAttribute('nome');
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
                $sn = $rows->getAttribute('shortname');
                $loja = $rows->getAttribute('loja');
                
                $nname = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
                $nomeLink = str_replace(' ', '-', ucfirst(strtolower($nname)));

                

               // $linkName = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
               // $nomeLink = str_replace('-', ' ', $explode[$n -1]);
                if('moveis' == $cat){
  ?>
    <li> 

        <div class="productwrapper">
          <div class="productphoto">
            <img src="<?php echo $img; ?>" alt="">
          </div>
          <div class="productdesc">
            <div class="productcall">
              <div class="redstripe"><p class="opensans"><?php echo $sn ; ?></p></div>
              <div class="whitestripe"><p class="opensans"><?php echo $loja; ?></p></div>
            </div>
            <div class="productprice">
              <div class="precode"><p class="opensans">DE <?php echo $nreais; ?><span>,<?php echo $ncents; ?></span></p></div>
              <div class="precopor"><p class="opensans">POR R$<span><?php echo $preais; ?></span>,<?php echo $pcents; ?></p></div>
            </div>
            <div class="boxfit">
              <div class="saibamais"><a href="descricao/descricao/produto/<?php echo $nomeLink; ?>">SAIBA MAIS</a></div>
              <a onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=560px,height=660px');return false;" href="https://www.facebook.com/dialog/feed?app_id=1766851593532710&amp;display=popup&amp;caption=<?php echo $nome." R$".$preais.",".$pcents;?>&amp;link=http%3A%2F%2Fwwww.ded.com.br<?php echo $_SERVER['REQUEST_URI'];?>&amp;redirect_uri=http://www.ded.com.br/botafora2016/&amp;picture=<?php echo PATH_LOCAL; echo $img; ?>" href="https://www.facebook.com/dialog/feed?app_id=1766851593532710&amp;display=popup&amp;caption=<?php echo $nome." R$".$preais.",".$pcents;?>?&amp;link=https%3A%2F%2Fwww.ded.com.br/botafora2016<?php echo $_SERVER['REQUEST_URI'];?>&amp;redirect_uri=http://www.ded.com.br/botafora2016/&amp;picture=<?php echo PATH_LOCAL; echo $img; ?>"  class="compartilhe alegreya">Compartilhe</a>
            </div>
            <div class="disponivel alegreya" >Disponível na <?php echo $loja; ?></div>
          </div>
        </div>
</li>
            <?php

  }

}

?>