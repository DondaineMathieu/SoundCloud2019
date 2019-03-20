$(document).pjax('[data-pjax] a, a[data-pjax]', '#main-content');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#main-content', {push: false});
// $(document).on('submit', 'form[data-pjax]', function(event) { $.pjax.submit(event, '#main-content') });


function displayCategories() {
    if (document.getElementById("ul-categories").style.display == "flex") {
        document.getElementById("ul-categories").style.display = "none";
    } else {
        document.getElementById("ul-categories").style.display = "flex";
    }
}

$(document).ready(function () {
    $(".chanson").click(function (e) {
        var f = $(this).attr('data-file');
        var audio = $("#audio");
        audio[0].src = f;
        audio[0].load();
        audio[0].play();
        /** diaplay the name */
        let title = $(this).data("name");
        let user = $(this).data('user');
        $('#currentSongTitle').html(title);
        $('#currentSongUser').html(user);
    });

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
})