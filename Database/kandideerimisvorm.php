<?php

require("connect.php");
$fail="'kinnitus.php'";

    echo '<form name="vorm" id="vorm" onsubmit="return submitForm('.$fail.');">';
    echo '<input type="text" id="n" name="nimi" value="" readonly hidden>';
    $sql ="Select ID, Nimi From parteid;";
    echo "<h3>Vali partei</h3>";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" id="p1" name="partei" value='.$row[0].'>'.$row[1].'<br>';
    }
	
	
    echo "<h3>Vali piirkond</h3>";
	$sql ="Select ID,Piirkond From piirkonnad;";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" id="p2" name="piirkond" value='.$row[0].'>'.$row[1].'<br>';
    }
    echo '<input type="submit" name="submit" value="Kinnita" />';
    
    echo"<div class='confirm'></div>";
    echo '</form>';
	echo "<h3>Ei leia sobivat parteid? Loo uus!</h3>";
	echo '<a href="#Database/parteiavaldus">Loo partei!</a>';
require("disconnect.php");
?>