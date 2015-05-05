<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Default Valimised</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" type="text/css" href="Styles/mySite.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <script type="text/javascript" defer="defer" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script type="text/javascript" defer="defer" src="js/fblogin.js"></script>
                <script type="text/javascript" src="js/ajax.js"></script>
                <script type="text/javascript" src="js/Push.js"></script>
                
                                
                                
                
        </head>
	<body onload=lae()>
            <div id="fb-root"></div>
            <div id="navBar">
                <nav role="navigation" class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Default Valimised</a>
                    </div>
                    <!-- Collection of nav links and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#avaleht">Avaleht</a></li>
                            <li><a href="#Database/haaleta">Hääleta</a></li>
                            <li><a href="#Database/nimekiri">Kandidaadid</a></li>
                            <li><a href="#Database/kandideerimisvorm">Kandideeri</a></li>
                            <li><a href="#Database/stat">Statistika</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="true"></div></li>
                        </ul>
                    </div>
        <!-- Vana navBar
            <div id="navBar">
                    <ul>
                        <li><a href="#avaleht">Avaleht</a></li>
                        <li><a href="#Database/haaleta">Hääleta</a></li>
                        <li><a href="#Database/nimekiri">Kandidaadid</a></li>
                        <li><a href="#Database/kandideerimisvorm">Kandideeri</a></li>
                        <li><a href="#Database/stat">Statistika</a></li>
                        <li><div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="true"></div></li>
                    </ul>
                </div> -->
		
                <!--
                    Below we include the Login Button social plugin. This button uses
                    the JavaScript SDK to present a graphical Login button that triggers
                    the FB.login() function when clicked.
                  -->
                
                <div id="status">
                </div>
        <div id="push"></div>
    <div id="sisu">
    </div>
 </body>

</html>