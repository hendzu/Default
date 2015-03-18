<?php
require_once("connect.php");
    $sql ="Select ID, Nimi, Partei, Piirkond From kandidaadid";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row['ID']."</td><td>".$row['Nimi']."</td><td>".$row['Partei']."</td><td>".$row['Piirkond']."</td></tr>";
    }
	
    echo "</table>";
?>