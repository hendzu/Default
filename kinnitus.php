  <h2>Teie avaldus ei ole esitatud</h2>
<?php 
require("Database/connect.php");
echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == "GET"){ 
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('Kadri',".$_POST['partei'].",".$_POST['piirkond'].");";
    echo $_REQUEST['partei'];
    echo "Kala";
    //$conn->query($sql);

   // kandideeri($_POST['nimi'],$_POST['partei'],$_POST['piirkond'],$conn);

require("Database/disconnect.php");}
?>
  <h2>Teie avaldus on esitatud</h2>