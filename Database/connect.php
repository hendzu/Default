<?php
Server: cikj0w7mbn.database.windows.net,1433
SQL Database: defaultAndmebaas
User Name: defaultkasutaja

PHP Data Objects(PDO) Sample Code:
try {
	$conn = new PDO ( \"sqlsrv:server = tcp:cikj0w7mbn.database.windows.net,1433; Database = defaultAndmebaas\", \"defaultkasutaja\", \"{your_password_here}\");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch ( PDOException $e ) {
		print( \"Error connecting to SQL Server.\" );
		die(print_r($e));
		}
		rSQL Server Extension Sample Code:
		
		$connectionInfo = array(\"UID\" => \"defaultkasutaja@cikj0w7mbn\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"defaultAndmebaas\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:cikj0w7mbn.database.windows.net,1433\";
		$conn = sqlsrv_connect($serverName, $connectionInfo);
?>