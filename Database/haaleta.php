<?php

require("connect.php");
$fail="'Database/haal.php'";

    echo '<form name="vorm" id="vorm" onsubmit="return submitForm('.$fail.');">';
    echo '<input type="text" id="n" name="nimi" value="" readonly hidden>';
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond
From kandidaadid join parteid on kandidaadid.partei_id=parteid.id join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id ;";
    echo "<h3>Vali partei</h3>";
    echo "<div id=\"haaletamistabel\">";
    echo "<table>";
    echo "<tr><th></th><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo '<tr><td><input type="radio" id="p1" name="kandidaat" value='.$row[0].'></td><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';
    }
    echo "</table>";
    echo "</div>";
    echo '<input type="submit" name="submit" value="Kinnita" />';
    
    echo"<div class='confirm'></div>";
    echo '</form>';
require("disconnect.php");
?>