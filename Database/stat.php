<?php
require("connect.php");
    $sqlpiirkonnad="Select piirkonnad.Piirkond from piirkonnad;";
    $sqlparteid="Select parteid.Nimi from parteid;";

    $sql1 ="Select parteid.Nimi,count(*) From kandidaadid join parteid on kandidaadid.partei_id=parteid.id
group by parteid.nimi;";
    echo "<div id=\"tabelid\">";
    echo "<h3>Valimistel osalevad parteid.</h3>";
    echo "<table>";
    echo "<tr><th>Partei</th><th>Kandidaatide arv</th></tr>";
    foreach ($conn->query($sql1) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
	
	
    echo "<h3>Kandidaatide hulk piirkonnas.</h3>";
	$sql2 ="Select piirkonnad.Piirkond,count(*)
From kandidaadid join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id
group by piirkonnad.Piirkond;";
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Kandidaatide arv</th></tr>";
    foreach ($conn->query($sql2) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
    
    echo '<h3>Hääli saanud kandidaadid</h3>';
    //kaks dropdowni 'piirkond' ja 'partei'
    echo 'Piirkond:';
    echo '<select id="valik1piirkond" name="valik1piirkond">';
    echo '<option value="koik">Kõik</option>';
    foreach ($conn->query($sqlpiirkonnad) as $row) {
        echo '<option value='.$row[0].'>'.$row[0].'</option>';
    }
    echo '</select>';
    echo '<input type="hidden" name="piirkond1" id="piirkond1_hidden">';
    $piirkond1=$_POST['valik1piirkond'];
    if ($piirkond1) echo 'Valitud: '.$piirkond1; else echo 'ei leia valitut';
    $sql3 ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    echo "<table>";
    echo "<tr><th>Kandidaat</th><th>Partei</th><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql3) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table>";

    echo'<h3>Häälte jagunemine piirkondade lõikes</h3>';
    $sql4 ="Select piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql4) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
    
    echo'<h3>Häälte jagunemine parteide lõikes</h3>';
    $sql5 ="Select parteid.Nimi, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by parteid.Nimi
    ORDER BY count(*) DESC;";
    echo "<table>";
    echo "<tr><th>Partei</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql5) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
    
    echo '<h3>Häälte jagunemine konkreetsete kandidaatide lõikes</h3>';
    echo "</div>";
require("disconnect.php");
?>