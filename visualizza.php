<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sale e servizi</title>
    </head>
    <body>
        <div id = "menu">
            <!-------------- MENU ------------------>

            <img src = "logo2.png" alt = "Logo" width="75">
                        
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="registra.html">Registrati</a></li>
                <li><a href="visualizza.html">i nostri prodotti</a></li> 
                <!--Proporrei di dividere la pagina visualizza in due pagine (Sale e Servizi)-->
            </ul>
                                
            <!---------------------------------------->
        </div>

        <div id = "itemlist">
            <!--Gli href sono temporanei, dopo vorrei mettere che premendo ti apre un piccolo form in pagina, senza avere una pagina per ogni roba...-->
            <div id = "sale">
                <h1>Sale e Studi</h1>
                <ul id="rooms">
                    <!--Sarebbe figo se si selezionasse lo studio da una sorta di planimetria dello studio (quando potremo csssssare)-->
                    <li><a href="paginastudio1">Studio 1</a></li>
                    <li><a href="paginastudio2">Studio 2</a></li>
                    <li><a href="paginastudio3">Studio 3</a></li>
                    <li><a href="paginasala1">Studio 4</a></li>
                </ul>
            </div>
            <div id = "servizi">
                <h1>Servizi</h1>
                <ul id="servizi">
                    <li><a href="mixmaster">Mix & Master</a></li>
                    <li><a href="consulenza">Consulenza</a></li>
                    <li><a href="assistenza">Assistenza in studio</a></li>
                    <li><a href="...">...</a></li>
                </ul>
            </div>
        </div>

        <footer>       
            ---------------------------------------------- 
            <br><b>Contatti</b><br>
            tel. 3778746278 <br>
            email: info@pnlstudio.com <br>
            Via delle Querce 23, 20235, Milano
        </footer>
    </body>
</html>