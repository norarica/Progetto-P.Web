<?php
    $IPATH = "assets/php/";
    
    session_start();
    $error = '';

    function getUtentiTable($db){
        //query di check
        $sql = "SELECT * FROM utente";

        $result = mysqli_query($db,$sql);          
        $count = mysqli_num_rows($result);

        $btnBlocca = "<input class='w3-button w3-black' type='submit' value='Blocca'/>";
        $btnApprova = "<input class='w3-button w3-black' type='submit' value='Approva'/>";

        if ($count > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Interessi</th><th>Approved</th><th>Action</th></tr>";
            //utenti...
            while($row = $result->fetch_assoc()) {
              echo "<tr>
              <td>".$row["Utente_cf"]."</td>
              <td>".$row["Nome"]." ".$row["Cognome"]."</td>
              <td>".$row["Interesse"]."</td>
              <td>".($row["approvato"] == null ? "F" : "T (".$row["approvato"].")")."</td>
              <td>".($row["approvato"] != null ? $btnBlocca : $btnApprova)."</td>
              </tr>";
            }
            echo "</table>";
        } else {
        echo "0 results";
        }
    }
?>