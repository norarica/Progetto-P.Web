<?php 
  $IPATH = "assets/php/"; 
  include($IPATH."config.php");
  include($IPATH . "auth.php");

  session_start();
  $error = '';

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    auth_reg($db, $_POST);
    
  }
?>


<!DOCTYPE html>
<html>
<head>
<title>Sale</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include($IPATH."allstyle.html"); ?>

</head>
<body>


  <?php include($IPATH."navbar.php"); ?>


<!-- Registra Container -->
<div class="w3-container">
  <div class="w3-content">
    <!--<h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"> REGISTRATI SENZA IMPEGNO </span></h5>-->
  <h5 class="titolo"><span class="w3-tag w3-wide"> REGISTRATI </span></h5>
    
  <!-- FORM -->
 <p><?php echo($error) ?></p>
    <form method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="cf" placeholder="Codice fiscale" required name="CF"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="email" name="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="password" name="password" placeholder="Password" required name="Password"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="nome" placeholder="Nome" required name="Nome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="cognome" placeholder="Cognome" required name="Cognome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="date-local" name="birthdate" required name="date" value="YYYY-MM-DD"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="interessi" placeholder="Due righe su di te e i tuoi interessi..." required name="interessi"></p>
      <p><input class="w3-button w3-black" type="submit" value="continua"/>
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
