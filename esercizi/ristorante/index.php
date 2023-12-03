<!doctype html>
<html style="width:616px;background-color:rgb(182, 60, 60)">
<header style="background-color: coral;">
<title>
buona pizza grande pizza 
</title>

<h2 align=center; style="color: bisque; text-align: center;"> CITTADELLA CASTELFRANCO PADOVA TREVISO </h2>
<img src="https://cdn.akamai.steamstatic.com/steam/apps/770810/capsule_616x353_italian.jpg?t=1697646160"
 style="width:616px;height:353px;">

<b>
<h3 style="color: bisque; text-align: right " >PRENOTA SUBITO! 359-369-1080</h3>

</b>
</header>



<?php
	$bevande= array ("acqua" => "1,00€", "birra"=> "2,00€", "coca cola"=> "2,00€", "fanta"=> "2,00€", "tè alla pesca"=> "2,00€");
    $impasto= array ("normale"=> "3,00€", "di grano duro"=> "4,00€", "di zucca"=> "4,00€", "per celiaci"=> "4,00€");
    $condimenti= array ("mozzarella"=> "0,50€", "pomodoro"=> "0,50€", "funghi"=> "0,50€", "peperoni"=> "0,50€","olive"=> "0,50€", "melanzane"=> "0,50€", "cipolla"=> "0,50€", "prosciutto "=> "0,50€", "gamberetti"=> "0,50€", "patatine"=> "0,50€", "fagioli"=> "0,50€", "mais"=> "0,50€", "pollo"=> "0,50€");
 ?>
 
 <body>
 
<h1 style="background-color: bisque; text-align: center;color: coral; " > MENÙ PIZZE</h1>
<table style="width: 616px; background-color: coral;color: rgb(182, 60, 60) " >

  <thead>
    <tr style=" color:bisque">
      <th scope="col"><h2>CONDIMENTI</h2></th>
      <th scope="col"><h2>IMPASTI</h2> </th>
    </tr>
  </thead>
  <tbody>
  <td>
  <table >
       <?php
      foreach($condimenti as $Nome=>$Prezzo)
      {
        echo "<tr>".$Nome. "<br>".$Prezzo. "</tr> <br> <br>";
      }
      ?>
     </table>
     </td>
    <td  valign="top">
    
    <table>
      <?php
      foreach($impasto as $Nome=>$Prezzo)
      {
        echo "<tr>".$Nome. "<br>".$Prezzo. "</tr> <br> <br>";
      }
      ?>
    
    <h2 style="color: bisque; " >BEVANDE</h2>
      <?php
      foreach($bevande as $Nome=>$Prezzo)
      {
        echo "<tr>".$Nome. "<br>".$Prezzo. "</tr> <br> <br>";
      }
      ?>
      </table>
    </td>
  </tbody>
  </table>
  

</body>     



</html>





