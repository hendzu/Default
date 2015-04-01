<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Default Valimised</title>
		<script type="text/javascript" src="js/ajax.js"></script>
		<?php 
        include("header.php");
        //require("Database/saadaavaldus.php");
		//kandideeri($_GET["nimi"],$_GET["partei"],$_GET["piirkond"],$conn);
		//require("Database/disconnect.php");
?>

  <div id="testdiv">
  <?php 
        include("Database/stat.php");       
?>
</div>
<button type="button" onclick="ajax('testdiv','Database/nimekiri.php')">Change Content</button>
</body>

</html>