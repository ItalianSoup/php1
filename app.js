text=["Hi! This site will be active soon!"]
var textpos = 0;
var speed = 100;

writing = () =>{
    document.querySelector("#message").innerHTML = text[0].substring(0, textpos)
    +"<span>\u25ae</span>";

    if(textpos++ !=text[0].length)
        setTimeout(writing, speed);
}

window.addEventListener("load", writing);