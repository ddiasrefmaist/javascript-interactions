
  
<div id="tabs">
  <ul class="fixer">
    <li class="tablist"><a href="#tabs-1"><div class="categoriasicone camamesaebanho"></div><span class="hidemobile">CAMA, MESA E BANHO</span></a></li>
    <li class="tablist"><a href="#tabs-2"><div class="categoriasicone cozinha"></div><span class="hidemobile">COZINHA</span></a></li>
    <li class="tablist"><a href="#tabs-3"><div class="categoriasicone dormitorio"></div><span class="hidemobile">DORMITÓRIOS</span></a></li>
    <li class="tablist"><a href="#tabs-4"><div class="categoriasicone decoracao"></div><span class="hidemobile">DECORAÇÃO</span></a></li>
    <li class="tablist alpha"><a href="#tabs-5"><div class="categoriasicone moveis"></div><span class="hidemobile">MÓVEIS</span></a></li>
  </ul>
  <div id="tabs-1">

      <ul class="bxslider7">
                <?php include("produto.php");?>

      </ul>
        <div id="bx-pagerc7">
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
 
          <?php
          $er++;
          

  }

}

?>
        </div>
 
  </div>

    <div id="tabs-2">

      <div style="margin:0;padding:0;">
        <ul class="bxslider2">
          <?php include("produto1.php");?>
        </ul>
        <div id="bx-pagerc2">

        <?php
        unset($er);
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
                if('cozinha' == $cat){
  ?>  
             
          <?php
          $i++;

  }

}

?>

        </div>
      </div>

    </div>

    <div id="tabs-3">

      <ul class="bxslider3">
        
        <?php include("produto2.php");?>
      </ul>
      <div id="bx-pagerc3">

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

                unset($i);

               // $linkName = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
               // $nomeLink = str_replace('-', ' ', $explode[$n -1]);
                if('dormitorio' == $cat){
  ?>  
  
          <?php
          $i++;

  }

}

?>

      </div>

    </div>

    <div id="tabs-4">

      <ul class="bxslider4">
        <?php include("produto3.php");?>
      </ul>
      <div id="bx-pagerc4">

        <?php
        	unset($i);
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
                if('decoracao' == $cat){
  ?>  
               
          <?php
          $i++;

  }

}

?>

      </div>

    </div>

    <div id="tabs-5">

      <ul class="bxslider5">
        <?php include("produto4.php");?>
      </ul>
      <div id="bx-pagerc5">
 
        <?php
        	unset($i);
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
                if('moveis' == $cat){
  ?>            
              
          <?php
          $i++;

  }

}

?>

      </div>

    </div>

    <div id="tabs-6">

      <ul class="bxslider6">
        <?php include("produto5.php");?>
      </ul>
      <div id="bx-pagerc6">

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
                $i = 0;
                

               // $linkName = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
               // $nomeLink = str_replace('-', ' ', $explode[$n -1]);
                if('conveniencia' == $cat){
                  
  ?>  
          <?php
          $i++;

  }

}

?>

      </div>

    </div>
</div>
