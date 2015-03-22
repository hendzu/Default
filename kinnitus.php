<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Default Valimised</title>
		<?php 
        include("header.php");
        require("Database/saadaavaldus.php");
		kandideeri($_GET["nimi"],$_GET["partei"],$_GET["piirkond"],$conn);
		require("Database/disconnect.php");
?>

  <h2>Teie avaldus on esitatud</h2>
</body>

</html>