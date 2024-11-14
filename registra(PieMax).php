<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; ?>


<!DOCTYPE html>
<html>
<head>
    <title>PNL - Registrazione</title>
    <?php include($IPATH."allstyle.html"); ?>
</head>
<body>
<!-------------- MENU ------------------>
    
    <?php include($IPATH."navbar.html"); ?>
                            
<!--------------------------------------->
    
    <h1>Registrazione </h1>
    <p>Inserisci tutti i dati nel campo sottostante </p>

    <form action="action_page.php" autocomplete="on">

        <label for="fname"> Nome:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname"> Cognome:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="fotoid"> Foto ID</label><br>
        <input type="file" id="fotoid" name="fotoid"><br><br>

        <label for="datanascita"> Data di nascita: </label><br>
        <input type="date" id="datanascita" name="datanascita"><br><br>


        Ambito di interesse: <input type="text" list="interest_list" name="interessi"><br>

            <datalist id="interest_list">

                <option value="Cantante" >
                <option value="Musicista" >
                <option value="Produttore" >
                <option value="Tecnico del suono" >

             </datalist>

        
        <br> <input type="checkbox" id="terms-agreement" name="condizioni d'uso"> 
        <label for="terms-agreement"> Accetto le <a href="">condizioni di utilizzo</a> del sito</label><br><br>
        <input type="submit", value="Submit"><br>

    </form>

    <br> 
    
<!-------------- FOOTER -------------------->
    &nbsp;  
    ----------------------------------------------    
        <br><b>Contatti</b><br>
        tel. 3778746278 <br>
        email: info@pnlstudio.com <br>
        Via delle Querce 23, 20235, Milano
<!-------------------------------------------->
</body>


</html>
