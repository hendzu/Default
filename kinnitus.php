<?php 
require("Database/connect.php");

try{try{
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('".$_POST['nimi']."',".$_POST['partei'].",".$_POST['piirkond'].");";
    $conn->query($sql);
echo "<h2>Teie avaldus on esitatud</h2>";}
catch{
	$sql ="Update haaled set Partei_id='".$_POST['partei']."',Piirkon_id='".$_POST['piirkond']."' where Nimi='".$_POST['nimi']."';";
    $conn->query($sql);
echo "<h2>Teie kanidatuur on muudetud</h2>";}
	
}
catch{echo "<h2>Teie avaldust ei olnud võimalik esitada.</h2>";}
require("Database/disconnect.php");
?>
  