<?php
require("connect.php");
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond
From kandidaadid join parteid on kandidaadid.partei_id=parteid.id join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id ;";
    echo '<meta charset="utf-8" />';
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
	
    echo "</table>";
require("disconnect.php");
?>