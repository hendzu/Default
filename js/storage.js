/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(typeof(localStorage) !== "undefined") {
    console.log("Storage defined");
    // Code for localStorage/sessionStorage.
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
    
} else {
    // Sorry! No Web Storage support..
}
