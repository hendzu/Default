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
}
function lehevahetus(){
    if (window.location.hash == "#Database/haaleta"||window.location.hash == "#Database/kandideerimisvorm"||window.location.hash == "#Database/parteiavaldus") {
        console.log(kontroll());
        if (kontroll() == "connected") {
			var leht = window.location.hash.replace("#", "") + ".php";
            ajax('sisu', leht);
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


window.onhashchange = lehevahetus;