<?php

require("connect.php");
    //scriptist on vaja saada response.status ja response.name, siis edasine
    //peaks töötama
    //echo 'response.status';
echo '<script type="text/javascript">function statusChangeCallback(response) {
                      console.log("statusChangeCallback");
                      console.log(response);
                      // The response object is returned with a status field that lets the
                      // app know the current login status of the person.
                      // Full docs on the response object can be found in the documentation
                      // for FB.getLoginStatus().
                      if (response.status === "connected") {
                        //Logged into Facebook;
                        testAPI();
                      } else if (response.status === "not_authorized") {
                        // The person is logged into Facebook, but not your app.
                        document.getElementById("kandideerimisvorm").innerHTML = \'<p id="logisisse">\'+
                          \'Kandideerimiseks peate olema sisse logitud!</p>\';
                      } else {
                        // The person is not logged into Facebook, so we\'re not sure if
                        // they are logged into this app or not.
                        
                        document.getElementById(\'kandideerimisvorm\').innerHTML = \'<p id="logisisse">\'+
                          \'Kandideerimiseks peate olema sisse logitud!</p>\';
                      }
                    }

                    // This function is called when someone finishes with the Login
                    // Button.  See the onlogin handler attached to it in the sample
                    // code below.
                    function checkLoginState() {
                      FB.getLoginStatus(function(response) {
                        statusChangeCallback(response);
                        document.getElementById(\'test\').innerHTML="jou";
                      });
                    }

                    window.fbAsyncInit = function() {
                    FB.init({
                      appId      : \'1386129771704789\',
                      cookie     : true,  // enable cookies to allow the server to access 
                                          // the session
                      xfbml      : true,  // parse social plugins on this page
                      version    : \'v2.2\' // use version 2.2
                    });

                    // Now that we\'ve initialized the JavaScript SDK, we call 
                    // FB.getLoginStatus().  This function gets the state of the
                    // person visiting this page and can return one of three states to
                    // the callback you provide.  They can be:
                    //
                    // 1. Logged into your app (\'connected\')
                    // 2. Logged into Facebook, but not your app (\'not_authorized\')
                    // 3. Not logged into Facebook and can\'t tell if they are logged into
                    //    your app or not.
                    //
                    // These three cases are handled in the callback function.

                    FB.getLoginStatus(function(response) {
                      statusChangeCallback(response);
                    });
                    
                    FB.Event.subscribe(\'auth.statusChange\', function(response)
                        {
                            console.log("Auth.statusChange");
                            statusChangeCallback(response);
                        }
                    );

                    };

                    // Load the SDK asynchronously
                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/et_EE/sdk.js";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, \'script\', \'facebook-jssdk\'));

                    // Here we run a very simple test of the Graph API after login is
                    // successful.  See statusChangeCallback() for when this call is made.
                    function testAPI() {
                      console.log(\'Ootame sinu andmeid.... \');
                      FB.api(\'/me\', function(response) {
                       console.log(\'Saime andmed: \' + response.name);
                        document.getElementById(\'namefield\').value = response.name.toString();
                      });
                      
                    }</script>';
//$muutuja=
echo '$session';
echo '<div id="test"><div>';
echo '<div id ="kandideerimisvorm">';
    echo '<form action="kinnitus.php" method="get">';
        echo '<h3>Nimi</h3>
<input id="namefield" type="text" name="nimi" readonly>';
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
    echo '</div>';
    /*}
    else {
        echo '<p id="logisisse">Kandideerimiseks peate olema sisse logitud.</p>';
    }*/
require("disconnect.php");
?>