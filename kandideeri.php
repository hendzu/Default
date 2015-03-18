<?php 
        include("header.php");         
        //$helper = new FacebookRedirectLoginHelper('your redirect URL here');
        //$loginUrl = $helper->getLoginUrl();
        // Use the login url on a link or button to redirect to Facebook for authentication

        $helper = new FacebookRedirectLoginHelper();
      try {
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
      }
      //echo htmlentities($html);
?>
    
    <h1>Default valimised</h1>
    <h2>Vabandame!</h2>
    <p>Antud leht ei ole hetkel valmis. Küsimuste tekkimiselt pöörduge meie arendustiimi liidri <a href=https://www.facebook.com/diana.algma>Diana</a> või kaasosalise <a href=https://www.facebook.com/hendrik.elmet>Hendriku</a> poole</p>
</body>

</html>