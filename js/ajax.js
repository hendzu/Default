function ajax(div,file){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(div).innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET",file,true);
xmlhttp.send();
store();
}
function lehevahetus(){
    if (window.location.hash == "#Database/haaleta"||window.location.hash == "#Database/kandideerimisvorm"||window.location.hash == "#Database/parteiavaldus") {
        console.log(kontroll());
        if (kontroll() == "connected") {
			var leht = window.location.hash.replace("#", "") + ".php";
            ajax('sisu', leht);
            //store();
        }
        else {
            ajax('sisu', "Database/reject.php");
        }
    }
    else {
        var leht = window.location.hash.replace("#", "") + ".php";
        console.log(leht);
        ajax('sisu', leht);
    }
}
function kontroll(){
    var responses  = checkLoginState();
    
    console.log(responses);
    return [responses.status];
}
function lae() {
    if (window.location.hash) {
        var i = 0;
        var ref = setInterval(function () {
            console.log(i);
            try {
                lehevahetus();
                clearInterval(ref);
            } catch (error) {
                i++;
                if (i == 2) {
                    clearInterval(ref);
                    ajax('sisu', "Database/reject.php");
                }
            }
        }
            , 200);
        
    }
	else{
		ajax('sisu',"avaleht.php");
	}
}
function nimi(fail) {
    document.getElementById("n").defaultValue = checkName();
}
function submitForm(fail) {
    nimi(fail);
    $.ajax({ type: 'POST', url: fail, data: $('#vorm').serialize(), success: function (response) {
        $('#vorm').find('.confirm').html(response);
        console.log(response);
    } 
    });
    return false;
}

function store(){
    //if(typeof(localStorage) == true) {
        console.log("Start storage");
        // Code for localStorage/sessionStorage.
        //if(document.forms["vorm"] == true){
            //console.log("forms[vorm] == true");
            var radios = document.forms["vorm"].elements["partei"];
            for(var i = 0, max = radios.length; i < max; i++) {
                radios[i].onclick = function() {
                    localStorage.setItem('valitudpartei',this.value);
                    console.log("valitud partei: " + this.value);
                };
            }
            $(function() {
            var $radios = $('input:radio[name=partei]');
                if($radios.is(':checked') === false) {
                    $selectedpartei = localStorage.getItem('valitudpartei');
                    if($selectedpartei!=null){
                        $radios.filter('[value='+$selectedpartei+']').prop('checked', true);
                        console.log("varem valitud partei: "+ $selectedpartei);
                    }
                }
            });
            var radios2 = document.forms["vorm"].elements["piirkond"];
            for(var i = 0, max = radios2.length; i < max; i++) {
                radios2[i].onclick = function() {
                    localStorage.setItem('valitudpiirkond',this.value);
                    console.log("valitud piirkond: " + this.value);
                };
            }
            $(function() {
            var $radios2 = $('input:radio[name=piirkond]');
                if($radios2.is(':checked') === false) {
                    $selectedpiirkond = localStorage.getItem('valitudpiirkond');
                    if($selectedpiirkond!=null){
                        $radios2.filter('[value='+$selectedpiirkond+']').prop('checked', true);
                        console.log("varem valitud piirkond: "+ $selectedpiirkond);
                    }
                }
            });
        //}
        //else console.log("forms[vorm] !== true");
    /*} else {
        console.log("Storage undefined");
        // Sorry! No Web Storage support..
    }*/
}

window.onhashchange = lehevahetus;