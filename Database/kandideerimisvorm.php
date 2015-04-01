<?php

require("connect.php");
    /*echo '<script type="text/javascript" src="js/fblogin.js"></script>';
    //scriptist on vaja saada response.status ja response.name, siis edasine
    //peaks töötama
    echo 'response.status';*/
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

$session = FacebookSession::newAppSession();

if($session) {

  try {

    $user_profile = (new FacebookRequest(
      $session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());

    echo $name=$user_profile->getName();
    /*
    echo "Name: " . $user_profile->getName();
*/
  } catch(FacebookRequestException $e) {

    echo "Exception occured, code: " . $e->getCode();
    echo " with message: " . $e->getMessage();

  }   

}
echo '$session';
if ($session){
    echo '<form action="kinnitus.php" method="get">';
        echo '<h3>Nimi</h3>
<input type="text" name="nimi" value=$name readonly>';
    $sql ="Select ID, Nimi From parteid;";
    echo "<h3>Vali partei</h3>";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" name="partei" value='.$row[0].'>'.$row[1].'<br>';
    }
	
	
    echo "<h3>Vali piirkond</h3>";
	$sql ="Select ID,Piirkond From piirkonnad;";
    foreach ($conn->query($sql) as $row) {
        echo '<input type="radio" name="piirkond" value='.$row[0].'>'.$row[1].'<br>';
    }
	
    echo '<input type="submit" value="Kinnita"/>';
    echo '</form>';
    }
    else {
        echo '<p id="logisisse">Kandideerimiseks peate olema sisse logitud.</p>';
    }
require("disconnect.php");
?>