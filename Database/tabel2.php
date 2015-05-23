<?php 
require("connect.php");
$piirkond=$_POST['valitudpiirkond'];

try{
    $sql ="Select parteid.Nimi, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where piirkonnad.Piirkond='".$piirkond."'
    group by parteid.Nimi
    ORDER BY count(*) DESC;";
    
    echo "<table>";
    echo "<tr><th>Partei</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";
}
catch (Exception $e) {
    echo "Tabelit ei olnud võimalik kuvada.";
    //echo $e;
}

require("disconnect.php");
?>
  