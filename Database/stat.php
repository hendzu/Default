<?php
require("connect.php");
    $sql ="Select parteid.Nimi,count(*) From kandidaadid join parteid on kandidaadid.partei_id=parteid.id
group by parteid.nimi;";
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
	echo "<h3>Enim hääli kogunud.</h3>";
	$sql ="Select kandidaadid.Nimi,count(*)
From kandidaadid join Haaled on kandidaadid.id=haaled.kandidaat_id
group by kandidaadid.nimi;";
    echo "<table>";
    echo "<tr><th>Kandidaat</th><th>Häälte arv</th></tr>";
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
    join haaled on haaled.kandidaat_id=kandidaadid.id;";
    
    echo "<table>";
    echo "<tr><th>Kandidaat</th><th>Partei</th><th>Piirkond</th><th>Hääli</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table>";
?>

<h3>Häälte jagunemine piirkondade lõikes</h3>
<h3>Häälte jagunemine parteide lõikes</h3>
<h3>Häälte jagunemine konkreetsete kandidaatide lõikes</h3>
<?php
require("disconnect.php");
?>