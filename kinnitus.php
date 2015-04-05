<?php 
require("Database/connect.php");
echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('".$_POST['nimi']."',".$_POST['partei'].",".$_POST['piirkond'].");";
    echo $_REQUEST['partei'];
    $conn->query($sql);


require("Database/disconnect.php");}
?>
  <h2>Teie avaldus on esitatud</h2>