<?php 
        include("header.php");         
        $helper = new FacebookRedirectLoginHelper('your redirect URL here');
        $loginUrl = $helper->getLoginUrl();
        // Use the login url on a link or button to redirect to Facebook for authentication

        $helper = new FacebookRedirectLoginHelper();
      try {
        $session = $helper->getSessionFromRedirect();
      } catch(FacebookRequestException $ex) {
        // When Facebook returns an error
        echo "Kandideerimiseks peate olema sisse logitud.";
      } catch(\Exception $ex) {
        // When validation fails or other local issues
        echo "Kandideerimiseks peate olema sisse logitud..";
      }
      if ($session) {
        // Logged in
        echo "Saate kandideerida, kuid see leht pole veel valmis.";
      }
?>
    
<h1>Default valimised</h1>
  <h2>Vabandame!</h2>
  <p>Antud leht ei ole hetkel valmis. Küsimuste tekkimiselt pöörduge meie arendustiimi liidri <a href=https://www.facebook.com/diana.algma>Diana</a> või kaasosalise <a href=https://www.facebook.com/hendrik.elmet>Hendriku</a> poole</p>
</body>

</html>