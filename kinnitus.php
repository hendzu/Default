  <h2>Teie avaldus ei ole esitatud</h2>
<?php 
require("Database/connect.php");
echo $_SERVER['REQUEST_METHOD'];

    echo "Kalamari";
if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $sql ="Insert into kandidaadid (Nimi, Partei_id,Piirkond_id) values ('Kadri',".$_POST['partei'].",".$_POST['piirkond'].");";
    echo $_REQUEST['partei'];
    echo "Kala";
    $conn->query($sql);


require("Database/disconnect.php");}
?>
  <h2>Teie avaldus on esitatud</h2>