<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Default Valimised</title>
                <script type="text/javascript" src="js/fblogin.js"></script>
				<script type="text/javascript" src="js/ajax.js"></script>
                <link rel="stylesheet" type="text/css" href="Styles/mySite.css">
        </head>
	<body>
                <div id="fb-root"></div>
                <div id="navBar">
                    <ul>
                        <li><button type="button" onclick="lehevahetus('Database/nimekiri')">Avaleht</button></li>
                        <li><button type="button" onclick="lehevahetus('Database/nimekiri')">Hääleta</button></li>
                        <li><button type="button" onclick="lehevahetus('Database/nimekiri')">Kandidaadid</button></li>
                        <li><button type="button" onclick="lehevahetus('Database/kandideerimisvorm')">Kandideeri</button></li>
                        <li><button type="button" onclick="lehevahetus('Database/stat')">Statistika</button></li>
                        <li><div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="true"></div></li>
                    </ul>
                </div>
		
                <!--
                    Below we include the Login Button social plugin. This button uses
                    the JavaScript SDK to present a graphical Login button that triggers
                    the FB.login() function when clicked.
                  -->
                
                <div id="status">
                </div>
    <div id="sisu">
    </div>
 </body>

</html>