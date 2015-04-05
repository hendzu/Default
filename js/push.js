if (typeof (EventSource) !== "undefined") {
    var source = new EventSource("push.php");
    source.onmessage = function (event) {
        document.getElementById("push").innerHTML = event.data + "<br>";
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}