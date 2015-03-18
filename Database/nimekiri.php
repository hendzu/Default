<?php
require_once("connect.php");
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.nimi, kandidaadid.Piirkond
From kandidaadid join parteid on kandidaadid.partei_id=parteid.id;";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row['kandidaadid.ID']."</td><td>".$row['kandidaadid.Nimi']."</td><td>".$row['parteid.nimi']."</td><td>".$row['kandidaadid.Piirkond']."</td></tr>";
    }
	
    echo "</table>";
?>