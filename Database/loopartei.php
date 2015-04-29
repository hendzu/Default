<?php 
require("connect.php");
	try{
    $sql ="Insert into parteid (Nimi) values ('".$_POST['nimi']."');";
    $conn->query($sql);
	echo "<h2>Teie avaldus on esitatud</h2>";
}
catch (Exception $e) {
	echo "<h2>Teie avalduse esitamine ei õnnestunud.</h2>";
}
require("disconnect.php");
?>
  