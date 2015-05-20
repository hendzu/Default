<?php
require("connect.php");
    $sql ="Select parteid.Nimi,count(*) From kandidaadid join parteid on kandidaadid.partei_id=parteid.id
group by parteid.nimi;";
    echo "<div id=\"tabelid\">";
    echo "<h3>Valimistel osalevad parteid.</h3>";
    echo "<table>";
    echo "<tr><th>Partei</th><th>Kandidaatide arv</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
	
	
    echo "<h3>Kandidaatide hulk piirkonna kaupa.</h3>";
	$sql ="Select piirkonnad.Piirkond,count(*)
From kandidaadid join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id
group by piirkonnad.Piirkond;";
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Kandidaatide arv</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
	
    echo "</table>";
    ?>
<h3>Häälte jagunemine kogu riigis</h3>
<?php
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    
    echo "<table>";
    echo "<tr><th>Kandidaat</th><th>Partei</th><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table>";
?>

<h3>Häälte jagunemine piirkondade lõikes</h3>
<?php
    $sql ="Select piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
?>
<h3>Häälte jagunemine parteide lõikes</h3>
<?php
    $sql ="Select parteid.Nimi, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by parteid.Nimi
    ORDER BY count(*) DESC;";
    
    echo "<table>";
    echo "<tr><th>Partei</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
?>
<h3>Häälte jagunemine konkreetsete kandidaatide lõikes</h3>
<?php
echo "</div>";
require("disconnect.php");
?>