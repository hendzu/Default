<?php 
require("connect.php");
$partei=$_POST['valitudpartei'];
$piirkond=$_POST['valitudpiirkond'];

try{
    echo $piirkond;
    /*if(!$partei.equals('koik') && !$piirkond.equals('koik')){
        echo '1';
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where parteid.Nimi=".$partei." and piirkonnad.Piirkond=".$piirkond."
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else if($partei.equals('koik') && !$piirkond.equals('koik')){
        echo '2';
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where piirkonnad.Piirkond=".$piirkond."
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else if($piirkond.equals('koik') && !$partei.equals('koik')){
        echo '3';
    $sql ="Select kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond, count(*)
    From kandidaadid join parteid on kandidaadid.partei_id=parteid.id 
    join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
    join haaled on haaled.kandidaat_id=kandidaadid.id
    where parteid.Nimi=".$partei."
    group by kandidaadid.nimi, parteid.Nimi, piirkonnad.Piirkond
    ORDER BY count(*) DESC;";}
    else {
        echo '4';
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
    echo "</table>";*/
}
catch (Exception $e) {
    echo "Tabelit ei olnud võimalik kuvada.";
}

require("disconnect.php");
?>
  