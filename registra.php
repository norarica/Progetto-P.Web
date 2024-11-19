<?php 
  $IPATH = "assets/php/"; 
  include($IPATH."config.php");

  session_start();
  $error = '';

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    //dal form...
    $cf = mysqli_real_escape_string($db, $_POST['cf']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $pw = mysqli_real_escape_string($db,$_POST['password']);
    $nome = mysqli_real_escape_string($db, $_POST['nome']);
    $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
    $interessi = mysqli_real_escape_string($db, $_POST['interessi']);

    //query di check
    $sql = "INSERT INTO `utente` (`Utente_cf`, `Email_u`, `Password_hash_u`, `Nome`, `Cognome`, `Datanascita_u`, `Interesse`, `Bloccato`) VALUES ('$cf', '$email', '$pw', '$nome', '$cognome', '$birthdate', '$interessi', false);";
    $result = mysqli_query($db,$sql);

    $sql_check = "SELECT * FROM utente WHERE email_u = '$email' and password_hash_u = '$pw'";
    $result_check = mysqli_query($db,$sql_check);           
    $count_check = mysqli_num_rows($result_check);

    if($count_check == 1) {
      //logg
       $_SESSION['login_user'] = $email;
       header("location: index.php");
    } else {
       $error = "Error";
    }
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


  <?php include($IPATH."navbar.html"); ?>


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
