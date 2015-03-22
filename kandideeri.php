<?php 
        include("header.php");         
        //$helper = new FacebookRedirectLoginHelper('your redirect URL here');
        //$loginUrl = $helper->getLoginUrl();
        // Use the login url on a link or button to redirect to Facebook for authentication

        //$helper = new FacebookRedirectLoginHelper();
      /*try {
        $session = $helper->getSessionFromRedirect();
      } catch(FacebookRequestException $ex) {
        // When Facebook returns an error
        //$html="<p>Kandideerimiseks peate olema sisse logitud.</p>";
      } catch(\Exception $ex) {
        // When validation fails or other local issues
        //$html="<p>Kandideerimiseks peate olema sisse logitud..</p>";
      }
      if ($session) {
        // Logged in
        //$html="<p>Saate kandideerida, kuid see leht pole veel valmis.</p>";
      }*/
      //echo htmlentities($html);
?>
    
    <?php 
        include("Database/kandideerimisvorm.php");       
?>

</body>

</html>