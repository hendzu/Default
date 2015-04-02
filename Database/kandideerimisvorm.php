<?php

require("connect.php");
    //scriptist on vaja saada response.status ja response.name, siis edasine
    //peaks töötama
    //echo 'response.status';
echo '<script type="text/javascript" src="js/kandideerimiseks.js"></script>';
echo '$session';
echo '<div id="test"><div>';
echo '<div id ="kandideerimisvorm">';
    echo '<form action="kinnitus.php" method="get">';
        echo '<h3>Nimi</h3>
<input id="namefield" type="text" name="nimi" readonly>';
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
    echo '</div>';
    /*}
    else {
        echo '<p id="logisisse">Kandideerimiseks peate olema sisse logitud.</p>';
    }*/
require("disconnect.php");
?>