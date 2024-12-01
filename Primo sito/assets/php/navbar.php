
<!-- Links (sit on top) -->
<div class="w3-row w3-padding w3-black navbar-container">
  <div class="w3-col s2">
    <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
  </div>
  <div class="w3-col s2">
    <a href="sale.php" class="w3-button w3-block w3-black">SALE</a>
  </div>
  <div class="w3-col s2">
    <a href="workshops.php" class="w3-button w3-block w3-black">WORKSHOPS</a>
  </div>
  <div class="w3-col s2">
    <a href="tariffe.php" class="w3-button w3-block w3-black">TARIFFE</a>
  </div>
  <div class="w3-col s2">
    <a href="login.php" class="w3-button w3-block w3-black">  
      <?php 
          if(!isset($login_session)){
            echo('LOGIN');
          } else {
            echo($login_username);
          }  
        ?>
    </a>
  </div>
  <?php if(isset($adminbool) && $adminbool):?>
      <div class="w3-col s2">
        <a href="gestione_utenti.php" class="w3-button w3-block w3-black">GESTIONE UTENTI</a>
      </div>
  <?php endif;  ?>
</div>

<div class="w3-row w3-padding w3-black dropdown-navbar">
  <span><i class="fas fa-bars"></i></span>
  <div class="dropdown-navbar-content w3-light-gray">
    <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
    <a href="sale.php" class="w3-button w3-block w3-black">SALE</a>
    <a href="workshops.php" class="w3-button w3-block w3-black">WORSHOPS</a>
    <a href="tariffe.php" class="w3-button w3-block w3-black">TARIFFE</a>
    <a href="login.php" class="w3-button w3-block w3-black">
          
    <?php 
          if(!isset($login_session)){
            echo('LOGIN');
          } else {
            echo($login_username);
          }  
        ?>

    </a>
    <?php if(isset($adminbool) && $adminbool):?>
      <div class="w3-col s2">
        <a href="gestione_utenti.php" class="w3-button w3-block w3-black">GESTIONE UTENTI</a>
      </div>
    <?php endif;  ?>
  </div>
</div>



<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Aperto dalle 7 alle 17</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white titolo-principale">PNL<br>studio</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Via delle Querce 23, 20235, Milano</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">