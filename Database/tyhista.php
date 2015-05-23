<?php 
require("connect.php");
	try{
            echo "Nimi:".$_POST['nimi'];
            $sql = "DELETE FROM Haaled WHERE isik='".$_POST['nimi']."';";
            $conn->query($sql);
            echo "<h2>Teie hääl on tühistatud</h2>";
	}
	catch (Exception $e) {
            echo "<h2>Teie häält ei olnud võimalik tühistada.</h2>";
	}

require("disconnect.php");
?>
  