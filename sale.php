<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; ?>


<!DOCTYPE html>
<html>
<head>
<title>Sale</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include($IPATH."allstyle.html"); ?>

</head>
<body>


  <?php include($IPATH."navbar.html"); ?>



<!--Menu container--> 
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px" id="morePadding-section">
 
    <h5 class="titolo"><span class="w3-tag w3-wide">LE NOSTRE SALE</span></h5>
  
    <div class="w3-row w3-center w3-card">
      <a href="javascript:void(0)" onclick="openMenu(event, 'SReg');" id="myLink">
        <div class="w3-col s4 tablink">Registrazione</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'SMM');">
        <div class="w3-col s4 tablink">Mix&Master</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'SProve');">
        <div class="w3-col s4 tablink">Prove</div>
      </a>
    </div>

<!--elementi cliccabili-->
<div id="SReg" class="w3-container menu w3-card">
  <div class="non-clickable">
    <!--<h5>Tariffe</h5>-->
    <p class="w3-text-black"><u>Tariffe</u><br>Dal lunedì al venerdì: <br>• 40euro l'ora<br>• 260euro giornaliero (8h) <br> Sabato e festivi: <br>• 45euro l'ora<br>• 320 giornaliero (8h)</p>
  </div>
  <div class="menu-item">
    <a href="breadbasket.html">
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="granola.html">
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="waffle.html">
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="scrambledeggs.html">
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="pancakes.html">
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </a>
  </div>
</div>

<div id="SMM" class="w3-container menu w3-card">
  <div class="non-clickable">
    <p class="w3-text-black"><u>Tariffe</u><br>Dal lunedì al venerdì: <br>• 45euro l'ora<br>• 320euro giornaliero (8h) <br> Sabato e festivi: <br>• 50euro l'ora<br>• 350 giornaliero (8h)</p>
  </div>
  <div class="menu-item">
    <a href="coffee.html">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="chocolato.html">
      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="corretto.html">
      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="icedtea.html">
      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p>
    </a>
  </div>
  
  <div class="menu-item">
    <a href="soda.html">
      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </a>
  </div>
</div>

<!--eventuale carnet/abbonamento con sconto x cumulazione
utente premium -> che utilizza tanto il servizio 
               -> che paga un abbonamento
vantaggi: non paghi l'assistenza dei tecnici
          (sconti?)
          carnets più vantaggiosi
          sconti sui corsi/attività
Mix&master anche affitto stanza? o solo servizio procurato dallo studio?
come differenziare le tariffe?
PAGINA tariffe 
- affitto stanze (registrazione/mix&master/prove) + presenza dell'omino
- visite/attività (il proprietario dello studio deve poter aggiungere e rimuovere i volantini a seconda)
- corsi (il prpt. deve poter aggiungere e rimuovere i volantini a seconda)
- Mix&master fatto da noi

-->

<div id="SProve" class="w3-container menu w3-card">
  <div class="non-clickable">
    <p class="w3-text-black"><u>Tariffe</u><br>Dal lunedì al venerdì:<br>• 13euro l'ora (fino alle 20h30)<br>• 16euro l'ora (dopo le 20h30)  <br> Sabato e festivi: <br>• 16euro l'ora (fino alle 20h30) <br>• 20euro l'ora (dopo le 20h30)</p>
  </div>
  <div class="menu-item">
    <a href="nuovasala.html">
      <h5>Sala Prove</h5>
      <p class="w3-text-grey">Descrizione della nuova sala</p>
    </a>
  </div>
</div>



  </div>
</div>


<footer class="w3-center w3-large" style="background-color: #e6ccb3; padding-top: 1px; padding-bottom: 1px;">
  <p>Contatti:</p>
  <p><strong>Email:</strong> info@pnlstudio.com <br>
  <strong>Telefono:</strong> +39 02 1234567</p>
</footer>



<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();

</script>

</body>
</html>
