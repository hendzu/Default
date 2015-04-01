<?php
require("connect.php");
    echo '<script type="text/javascript" src="js/fblogin.js"></script>';
    echo 'response.status';
    if (response.status == 'connected'){
    echo '<form action="kinnitus.php" method="get">';
        echo '<h3>Nimi</h3>
<input type="text" name="nimi" value=response.name readonly>';
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
	
    echo '<input type="submit" value="Kinnita"/>';
    echo '</form>';
    }
    else {
        echo '<p id="logisisse">Kandideerimiseks peate olema sisse logitud.</p>';
    }
require("disconnect.php");
?>