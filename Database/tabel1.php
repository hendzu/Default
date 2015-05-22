<?php 
require("connect.php");
$partei=$_POST['valitudpartei'];
$piirkond=$_POST['valitudpiirkond'];

try{
    if($partei!='koik' && $piirkond!='koik'){
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where parteid.Nimi='".$partei."' and piirkonnad.Piirkond='".$piirkond."'
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else if($partei=='koik' && $piirkond!='koik'){
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where piirkonnad.Piirkond='".$piirkond."'
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else if($piirkond=='koik' && $partei!='koik'){
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where parteid.Nimi='".$partei."'
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else {
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    
    echo "<table>";
    echo "<tr><th>Kandidaat</th><th>Partei</th><th>Piirkond</th><th>Hääled</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table>";
}
catch (Exception $e) {
    echo "Tabelit ei olnud võimalik kuvada.";
    //echo $e;
}

require("disconnect.php");
?>
  