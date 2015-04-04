<?php

require("connect.php");
$fail="'kinnitus.php'";
    echo '<form name="ajaxform" id="ajaxform" action="#kinnitus" method="post">';
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
    $div='confirm';
    $leht='kinnitus';
    echo '<input type="submit" name="submit" value="Kinnita" />';
    echo '</form>';
    echo"<div class='confirm'></div>";
require("disconnect.php");
?>