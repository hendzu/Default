<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
		<title>Default Valimised</title>
	</head>
	<body>
                <div id="fb-root"></div>
                <script>
                    
                  (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    var userInfo = document.getElementById('user-info');
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/et_EE/sdk.js#xfbml=1&appId=1386129771704789&version=v2.0";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    
                    function statusChangeCallback(response) {
                    console.log('statusChangeCallback');
                    console.log(response);
                    if (response.status === 'connected') {
                      testAPI();
                    //} else if (response.status === 'not_authorized') {
                      // The person is logged into Facebook, but not your app.
                      //document.getElementById('status').innerHTML = 'Please log ' +
                      //  'into this app.';
                    //} else {
                      // The person is not logged into Facebook, so we're not sure if
                      // they are logged into this app or not.
                      //document.getElementById('status').innerHTML = 'Please log ' +
                      //  'into Facebook.';
                    }
                  }
                  function checkLoginState() {
                        FB.getLoginStatus(function(response) {
                          statusChangeCallback(response);
                        });
                      }
                  
                    function testAPI() {
                        FB.api('/me', function(response) {
                         userInfo.innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture">' +
                         response.name;
                    });
                      }
                    </script>
		<p>
			<a href="http://defaultvalimised.azurewebsites.net/">Avaleht</a>
			<a href="http://defaultvalimised.azurewebsites.net/haaleta.php">Hääleta</a>
			<a href="http://defaultvalimised.azurewebsites.net/kandidaadid.php">Kandidaadid</a>
			<a href="http://defaultvalimised.azurewebsites.net/kandideeri.php">Kandideeri</a>
			<a href="http://defaultvalimised.azurewebsites.net/tulemused.php">Tulemused</a>
		</p>
                <div class="fb-login-button" data-max-rows="1" data-size="large" 
                    data-show-faces="false" data-auto-logout-link="true" onlogin="checkLoginState();"></div>
                <div id="user-info"></div>