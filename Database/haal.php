<?php 
require("connect.php");
	try{
		try{
    $sql ="Insert into haaled (Isik,Kandidaat_id) values ('".$_POST['nimi']."',".$_POST['kandidaat'].");";
    $conn->query($sql);
	echo "<h2>Teie hääl on esitatud</h2>";
	}
	catch (Exception $e) {
		$sql ="Update haaled set Kandidaat_id='".$_POST['kandidaat']."' where Isik='".$_POST['nimi']."';";
    $conn->query($sql);
	echo "<h2>Teie hääl on muudetud</h2>";
	}
	}
	catch (Exception $e) {
		echo "<h2>Teie häält ei olnud võimalik esitada</h2>";
	}

require("disconnect.php");
?>
  