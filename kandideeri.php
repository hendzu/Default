<?php 
        include("header.php");         
?>
    
  <h1>Default valimised</h1>
  
  $helper = new FacebookRedirectLoginHelper('your redirect URL here');
  $loginUrl = $helper->getLoginUrl();
  // Use the login url on a link or button to redirect to Facebook for authentication
  
  $helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
  <p>Kandideerimiseks peate olema sisse logitud</p>
} catch(\Exception $ex) {
  // When validation fails or other local issues
  <p>Kandideerimiseks peate olema sisse logitud.</p>
}
if ($session) {
  // Logged in
  <p>Saate kandideerida, kuid see leht pole veel valmis.</p>
}
  <h2>Vabandame!</h2>
  <p>Antud leht ei ole hetkel valmis. Küsimuste tekkimiselt pöörduge meie arendustiimi liidri <a href=https://www.facebook.com/diana.algma>Diana</a> või kaasosalise <a href=https://www.facebook.com/hendrik.elmet>Hendriku</a> poole</p>
</body>

</html>