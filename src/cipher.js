var question = "adytum";

function cipher(text) {
    var len = text.length;
    for (var i = 0; i < len; i++) {
        text.replace(text.charAt(i) + 3);
    }
}

function caesarCipher(str, key) {
    return str.toUpperCase().replace(/[A-Z]/g, c => String.fromCharCode((c.charCodeAt(0) - 65 + key) % 26 + 65));
}

function showText(text) {
    document.getElementById("question").innerHTML = text;
}

function check() {
    var answer = document.getElementById("answer").value;
    console.log(answer);
    console.log(currRoom);
    if (answer == question) {
        solved(currRoom);
        console.log("solved");
        document.getElementById("incorrect").value="Correct";
    }
    else{
        console.log("incorrect");
        console.log(question);
    }
}

window.onload = function() {
    var text = caesarCipher(question, Math.floor(Math.random() * 26));
    showText(text);
    //document.getElementsByTagName("button")[0].addEventListener("click", check);

};