<?php 
require("connect.php");
if($_POST['nimi'] != null){
$nimi=$_POST['nimi'];} else 
{$nimi="";}
if($_POST['partei'] != null){
$partei=$_POST['partei'];} else
{$partei="";}
if($_POST['piirkond'] != null){
$piirkond=$_POST['piirkond'];} else
{$piirkond="";}

try{
    $sql ="Select kandidaadid.ID, kandidaadid.Nimi, parteid.Nimi, piirkonnad.Piirkond
        From kandidaadid join parteid on kandidaadid.partei_id=parteid.id join piirkonnad on kandidaadid.piirkond_id=piirkonnad.id 
        where kandidaadid.Nimi like '%" . $nimi . "%' and parteid.Nimi like '%" . $partei . "%'
        and piirkonnad.Piirkond like '%" . $piirkond . "%';";
    echo "<h3>Otsingu tulemus</h3>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table>";
}
catch (Exception $e) {
    echo "<h3>Otsingut ei olnud võimalik sooritada</h3>";
}

require("disconnect.php");
?>
  