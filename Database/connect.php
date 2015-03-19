<?php

try {
	$conn = new PDO ( "sqlsrv:server = tcp:cikj0w7mbn.database.windows.net,1433; Database = defaultAndmebaas", "defaultkasutaja", "Isherenow0");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
    	catch ( PDOException $e ) {
		print( "Error connecting to SQL Server." );
		die(print_r($e));
		} 
?>