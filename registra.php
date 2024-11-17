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


<!-- Registra Container -->
<div class="w3-container">
  <div class="w3-content">
    <!--<h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"> REGISTRATI SENZA IMPEGNO </span></h5>-->
  <h5 class="titolo"><span class="w3-tag w3-wide"> REGISTRATI </span></h5>
    
  <!-- FORM -->
 <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">INVIA</button></p>
    </form>
  </div>
</div>

<!--FOOTER-->
<footer class="w3-center w3-large footer">
  <p>Contatti:</p>
  <p><strong>Email:</strong> info@pnlstudio.com <br>
  <strong>Telefono:</strong> +39 02 1234567</p>
</footer>

</body>
</html>
