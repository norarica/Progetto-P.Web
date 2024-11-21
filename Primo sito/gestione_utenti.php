<?php 
  $IPATH = "assets/php/";
  include($IPATH.'session.php');
  include($IPATH . 'admintools.php');
  include($IPATH . "config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['bottone_approva'])){
        approvautenti($db, $_POST['bottone_approva'],  $login_admin_cf);
    }
    if(isset($_POST['bottone_blocca'])){
      bloccautenti($db,$_POST['bottone_blocca']);
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include($IPATH."allstyle.html"); ?>

</head>
<body>


<?php include($IPATH."navbar.php"); ?>

<?php
  if(isset($login_session)){
    echo("Utente: " . $_SESSION['login_user']);
    echo("Nome utente". $login_username);
    if(isset($adminbool) && $adminbool){
      echo("<br>Utente admin.");
    }
  }
?>

<!-- About Container -->
  <div class="w3-container">
    <div class="w3-content">
      <h5 class="titolo"><span class="w3-tag w3-wide">Utenti</span></h5>
      <?php
          getUtentiTable($db);
      ?>
    </div>
  </div>
<!-- Footer -->
<footer class="w3-center w3-large footer">
  <p>Contatti:</p>
  <p><strong>Email:</strong> info@pnlstudio.com <br>
  <strong>Telefono:</strong> +39 02 1234567</p>
</footer>


</body>
</html>
