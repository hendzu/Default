<?php
require("connect.php");

    echo "<form>";
    $sql ="Select ID, Nimi From parteid;";
    echo "<h3>Vali partei</h3>";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" name="partei" value='.$row[0].'>'.$row[1].'<br>';
    }
	
	
    echo "<h3>Vali piirkond</h3>";
	$sql ="Select ID,Piirkond From piirkonnad;";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" name="piirkond" value='.$row[0].'>'.$row[1].'<br>';
    }
	
    echo '<input type="button" onclick="'."alert('Tere')".'" value="Kinnita"></form>';
require("disconnect.php");
?>