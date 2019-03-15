// detect enter keypress
$(document).keypress(function(e) {
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
        let recherche = document.getElementById("input-search").value;
        if (recherche != null ) {
            window.location.href = "/recherche/"+recherche;
        }
    }
});