// document.getElementById("categories").onclick = test();

function test() {
    if (document.getElementById("ul-categories").style.display == "flex") {
        document.getElementById("ul-categories").style.display = "none";
    } else {
        document.getElementById("ul-categories").style.display = "flex";
    }
    
}

$(document).ready(function() {
    $(".chanson").click(function(e) {
        var f= $(this).attr('data-file');
        var audio = $("#audio");
        audio[0].src = f;
        audio[0].play();
    });
})