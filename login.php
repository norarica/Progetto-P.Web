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


<!-- Login Container -->
<div class="w3-container">
  <div class="w3-content">

    <h5 class="titolo"><span class="w3-tag w3-wide">LOGIN</span></h5>

<!-- FORM -->
  <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="Password"></p>
      <button class="w3-button w3-black" type="submit">Continua</button>
    </form>
</div>


<div class="w3-center" style="padding: 20px; padding-bottom: 35px; margin-top: 1px">
  <p>Non hai un account? <br>
  <a href="registra.html" class="w3-button w3-black w3-medium" style="margin-top: 10px">Clicca qui per registrarti</a></p>
</div>


<footer class="w3-center w3-large footer">
  <p>Contatti:</p>
  <p><strong>Email:</strong> info@pnlstudio.com <br>
  <strong>Telefono:</strong> +39 02 1234567</p>
</footer>



</body>
</html>
