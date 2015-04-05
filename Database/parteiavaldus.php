<?php

$fail="'Database/loopartei.php'";
    echo '<form name="vorm" id="vorm" onsubmit="return submitForm('.$fail.');">';
	echo "<h3>Vali partei nimi</h3>";
    echo '<input type="text" id="n" name="nimi" value="">';
    echo '<input type="submit" name="submit" value="Kinnita" />';
    
    echo"<div class='confirm'></div>";
    echo '</form>';
?>