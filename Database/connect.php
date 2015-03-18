<?php
/*Server: cikj0w7mbn.database.windows.net,1433
SQL Database: defaultAndmebaas
User Name: defaultkasutaja

PHP Data Objects(PDO) Sample Code:
<h2>Vabandame!</h2>*/

try {
	$conn = new PDO ( "sqlsrv:server = tcp:cikj0w7mbn.database.windows.net,1433; Database = defaultAndmebaas", "defaultkasutaja", "Isherenow0");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
    	catch ( PDOException $e ) {
		print( "Error connecting to SQL Server." );
		die(print_r($e));
		}
        
    $sql ="Select Nimi, Partei, Piirkond From kandidaadid";
    foreach ($conn->query($sql) as $row) {
        print $row['Nimi'] . "\t";
        print $row['Partei'] . "\t";
        print $row['Piirkond'] . "\n";
    }

		/*rSQL Server Extension Sample Code:
		
		$connectionInfo = array("UID" => "defaultkasutaja@cikj0w7mbn", "pwd" => "Isherenow0", "Database" => "defaultAndmebaas", "LoginTimeout" => 30, "Encrypt" => 1);
        $serverName = "tcp:cikj0w7mbn.database.windows.net,1433";
		$conn = sqlsrv_connect($serverName, $connectionInfo);*/
?>