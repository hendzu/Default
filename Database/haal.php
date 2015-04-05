<?php 
require("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $sql ="Insert into haaled (Isik,Kandidaat_id) values ('".$_POST['nimi']."',".$_POST['kandidaat'].");";
    $conn->query($sql);


require("disconnect.php");}
?>
  <h2>Teie hääl on esitatud</h2>