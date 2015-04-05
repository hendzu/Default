<?php 
require("Database/connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('".$_POST['nimi']."',".$_POST['partei'].",".$_POST['piirkond'].");";
    $conn->query($sql);


require("Database/disconnect.php");}
?>
  <h2>Teie avaldus on esitatud</h2>