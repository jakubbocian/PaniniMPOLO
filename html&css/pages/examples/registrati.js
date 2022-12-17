function Checkemail(){
    document.getElementById("registrati").onclick = function(){
        callFeedbackGET("registrati.php?email=" + document.getElementById("email").value);
    };
}