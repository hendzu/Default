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
    var leht = window.location.hash.replace("#", "") + ".php";
ajax('sisu',leht);
}
function kontroll(){
    var leht="karu.txt";
    console.log("Tere");
    var responses  = checkLoginState();
    
    console.log(responses);

ajax('sisu',leht);
}
window.onhashchange = lehevahetus;