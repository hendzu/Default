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
    
    $fail1 = "'Database/tabel1.php'";
    echo '<form name="tabel1" id="tabel1" onsubmit="return submitTable1('.$fail1.');">';
    echo '<h3>Hääli saanud kandidaadid</h3>';
    echo 'Piirkond:';
    echo '<select id="valitudpiirkond" name="valitudpiirkond">';
    echo '<option value="koik">Kõik</option>';
    foreach ($conn->query($sqlpiirkonnad) as $row) {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    echo '</select>';
    echo 'Partei:';
    echo '<select id="valitudpartei" name="valitudpartei">';
    echo '<option value="koik">Kõik</option>';
    foreach ($conn->query($sqlparteid) as $row) {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    echo '</select>';
    echo '<input type="submit" name="submit" value="Kuva">';
    echo'<div class="confirm"></div>';
    echo '</form>';

    echo '<h3>Hääli saanud parteid</h3>';
    $sql3 ="Select parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    echo "<table>";
    echo "<tr><th>Partei</th><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql3) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    }
    echo "</table>";
    
    
    $fail2 = "'Database/tabel2.php'";
    echo '<form name="tabel2" id="tabel2" onsubmit="return submitTable2('.$fail2.');">';
    echo '<h3>Hääli saanud parteid kindlas piirkonnas</h3>';
    echo 'Piirkond:';
    echo '<select id="valitudpiirkond" name="valitudpiirkond">';
    foreach ($conn->query($sqlpiirkonnad) as $row) {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    echo '</select>';
    echo '<input type="submit" name="submit" value="Kuva">';
    echo'<div class="confirm"></div>';
    echo '</form>';
    
    echo'<h3>Hääletamine piirkonniti</h3>';
    $sql5 ="Select piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    join piirkonnad on piirkonnad.id=kandidaadid.piirkond_id
    group by piirkonnad.Piirkond
    ORDER BY count(*) DESC;";
    echo "<table>";
    echo "<tr><th>Piirkond</th><th>Hääli</th></tr>";
    foreach ($conn->query($sql5) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
    
    echo "</div>";
require("disconnect.php");
?>