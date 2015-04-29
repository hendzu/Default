<?php 
require("Database/connect.php");

try{try{
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('".$_POST['nimi']."',".$_POST['partei'].",".$_POST['piirkond'].");";
    $conn->query($sql);
echo "<h2>Teie avaldus on esitatud</h2>";}
catch (Exception $e) {
	$sql ="Update kandidaadid set Partei_id='".$_POST['partei']."' , Piirkond_id='".$_POST['piirkond']."' where Nimi='".$_POST['nimi']."';";
    $conn->query($sql);
echo "<h2>Teie kanidatuur on muudetud</h2>";}
	
}
catch (Exception $e) {echo "<h2>Teie avaldust ei olnud võimalik esitada.</h2>";}
require("Database/disconnect.php");
?>
  