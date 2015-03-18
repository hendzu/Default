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
    echo "<p>Kala</p><p>Kala2</p>";    
    $sql ="Select ID, Nimi, Partei, Piirkond From kandidaadid";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nimi</th><th>Partei</th><th>Piirkond</th></tr>";
    foreach ($conn->query($sql) as $row) {
        //echo "<tr><td>$row</td><td>Nimi</td><td>Partei</td><td>Piirkond</td></tr>";
        echo "<tr><td>".$row['ID']."</td><td>".$row['Nimi']."</td><td>".$row['Partei']."</td><td>".$row['Piirkond']."</td></tr>";
    }
    echo "</table>";
		/*rSQL Server Extension Sample Code:
		
		$connectionInfo = array("UID" => "defaultkasutaja@cikj0w7mbn", "pwd" => "Isherenow0", "Database" => "defaultAndmebaas", "LoginTimeout" => 30, "Encrypt" => 1);
        $serverName = "tcp:cikj0w7mbn.database.windows.net,1433";
		$conn = sqlsrv_connect($serverName, $connectionInfo);*/
?>