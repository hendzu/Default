/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

FB.Event.subscribe('auth.statusChange', function(response)
    {
        console.log("Auth.statusChange");
        statusChangeCallback(response);
    }
);
            
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        //Logged into Facebook;
        document.getElementById('namefield').value = response.name;
        } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
            document.getElementById('kandideerimisvorm').innerHTML = '<p id="logisisse">' .
                    'Kandideerimiseks peate olema sisse logitud!</p>';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('kandideerimisvorm').innerHTML = '<p id="logisisse">' .
                    'Kandideerimiseks peate olema sisse logitud!</p>';
        }
    }