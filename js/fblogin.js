var response1;
var response2;
function statusChangeCallback(response){
    //console.log('statusChangeCallback');
    response1=response;
    if(response.status==='connected'){
        testAPI();
    }else if(response.status==='not_authorized'){
        document.getElementById('status').innerHTML='Palun '+
                'logige siia lehele.';
    }else{document.getElementById('status').innerHTML='Palun '+
                'logige Facebooki.';
    }
}
function checkLoginState(){
    FB.getLoginStatus(function(response){
        statusChangeCallback(response);
    });
    return response1;
}function checkName(){
	return response2.name;
}

window.fbAsyncInit=function(){
    FB.init(
            {
                appId:'1386129771704789',
        cookie:true,
        xfbml:true,
        version:'v2.2'
    });
    FB.getLoginStatus(function(response){
        statusChangeCallback(response);
    });
    FB.Event.subscribe('auth.statusChange',function(response) {
        //console.log("Auth.statusChange");
        statusChangeCallback(response);
    });
};

(function(d,s,id){
    var js,
    fjs=d.getElementsByTagName(s)[0];
    if(d.getElementById(id))return;
    js=d.createElement(s);
    js.id=id;
    js.src="//connect.facebook.net/et_EE/sdk.js";
    fjs.parentNode.insertBefore(js,fjs);
}(document,'script','facebook-jssdk'));

function testAPI(){
    //console.log('Tere tulemast!  Ootame sinu andmeid.... ');
    FB.api('/me',function(response){
        //console.log('Edukas sisselogimine: '+response.name);
        document.getElementById('status').innerHTML='Olete sisse logitud, '+
                response.name+'!';response2=response;
    });
}