<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Default Valimised</title>
                <script type="text/javascript" src="js/fblogin.js"></script>
	</head>
	<body>
                <div id="fb-root"></div>
                

		<p>
			<a href="http://defaultvalimised.azurewebsites.net/">Avaleht</a>
			<a href="http://defaultvalimised.azurewebsites.net/haaleta.php">Hääleta</a>
			<a href="http://defaultvalimised.azurewebsites.net/kandidaadid.php">Kandidaadid</a>
			<a href="http://defaultvalimised.azurewebsites.net/kandideeri.php">Kandideeri</a>
			<a href="http://defaultvalimised.azurewebsites.net/tulemused.php">Tulemused</a>
		</p>
                
                <!--
                    Below we include the Login Button social plugin. This button uses
                    the JavaScript SDK to present a graphical Login button that triggers
                    the FB.login() function when clicked.
                  -->
                <div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="true"
                     data-onlogin="checkLoginStatus();"></div>
                <div id="status">
                </div>