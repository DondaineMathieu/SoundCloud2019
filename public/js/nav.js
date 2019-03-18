$(document).pjax('[data-pjax] a, a[data-pjax]', '#main-content');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#main-content', {push: false});

function displayCategories() {
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
        audio[0].load();
        audio[0].play();
    });
})

$("#testajax").click(function(e) {
    e.preventDefault();

    $.ajax({
        type: "GET",
        url: "/testajax",
        success: function (data, textStatus, jqXHR) {
            $("#aremplir").html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // Error
        }
    })
})