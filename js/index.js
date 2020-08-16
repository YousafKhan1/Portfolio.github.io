function textAnimation() {
    var text = "A Front-End Developer";
    var i = 0;
    var subStr = "";
    setInterval(function (){
        subStr = subStr + text.substr(i, 1);
        document.getElementById('animation-text').innerHTML = subStr;
        i++;
        if(i >= text.length) {
            i = 0;
            subStr = "";
        }
    }, 300);
}  