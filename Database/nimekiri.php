<?php
require("connect.php");
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.Nimi, kandidaadid.Piirkond
From kandidaadid join parteid on kandidaadid.partei_id=parteid.id;";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
	
    echo "</table>";
require("disconnect.php");
?>