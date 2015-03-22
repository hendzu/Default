<?php
require("connect.php");
    function functionName($nimi,$partei,$piirkond) {
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id)
	values (".$nimi.",".$partei.",".$piirkond.");";
	$conn->query($sql);
?>