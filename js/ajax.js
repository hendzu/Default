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
    if (window.location.hash == "#Database/kandideerimisvorm") {
        console.log(kontroll()[0]);
        if (kontroll()[0] == "connected") {
            ajax('sisu', "Database/kandideerimisvorm.php");
        }
        else {
            ajax('sisu', "Database/reject.php");
        }
    }
    else {
        var leht = window.location.hash.replace("#", "") + ".php";
        ajax('sisu', leht);
    }
}
function kontroll(){
    var responses  = checkLoginState();
    
    console.log(responses);
    return [responses[0].status, responses[1].name];
}
function lae() {
    if (window.location.hash) {
        lehevahetus();
    }
}
window.onhashchange = lehevahetus;