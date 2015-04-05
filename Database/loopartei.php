<?php 
require("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $sql ="Insert into parteid (Nimi) values ('".$_POST['nimi']."');";
    $conn->query($sql);


require("disconnect.php");}
?>
  <h2>Teie avaldus on esitatud</h2>