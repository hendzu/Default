<?php
require("connect.php");
    $sql ="Select parteid.Nimi,count(*) From kandidaadid join parteid on kandidaadid.partei_id=parteid.id
group by parteid.nimi;";
    echo "<h3>Valimistel osalevad parteid.</h3>";
    echo "<table>";
    echo "<tr><th>Partei</th><th>Kanidaatide arv</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
	
	
    echo "<h3>Kandidaatide hulk piirkonna kaupa.</h3>";
	$sql ="Select piirkonnad.Piirkond,count(*)
From kandidaadid join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id
group by piirkonnad.Piirkond;";
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Kanidaatide arv</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
	
    echo "</table>";
require("disconnect.php");
?>