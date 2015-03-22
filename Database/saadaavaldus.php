<?php
require("connect.php");
function kandideeri($nimi,$partei,$piirkond,$conn) {
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('".$nimi."',".$partei.",".$piirkond.");";
    $conn->query($sql);
    }
?>