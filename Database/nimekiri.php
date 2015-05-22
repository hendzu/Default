<?php
require("connect.php");
    $fail="'Database/otsing.php'";
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond
From kandidaadid join parteid on kandidaadid.partei_id=parteid.id join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id ;";
    echo '<meta charset="utf-8" />';
    echo "<h3>Kandidaatide nimekiri</h3>";
    echo "<div id=\"tabelid\">";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
	
    echo "</table>";
    echo "</div>";
    echo "<h3>Otsi kandidaate</h3>";
    
    echo'<form name="otsing" id="otsing" onsubmit="return submitSearch('.$fail.');">';
    echo 'Nimi:<br>';
        echo'<input type="text" name="nimi">';
        echo'<br>';
        echo'Partei:<br>';
        echo'<input type="text" name="partei">';
        echo'<br>';
        echo'Piirkond:<br>';
        echo'<input type="text" name="piirkond">';
        echo'<br><br>';
        echo'<input type="submit" name="submit" value="Otsi">';
        
        echo'<div class="confirm"></div>';
    echo'</form> ';

require("disconnect.php");
?>