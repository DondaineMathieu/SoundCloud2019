(function() {
    'use strict';

    let audioPlayer = $('#audio')[0];
    let progress = $('#customProgressBar');
    let volume = $('#customVolumeLevel');



    $('#customPlay').on('click', function() {
        audioPlayer.play();
    });

    $('#customPause').on('click', function() {
        audioPlayer.pause();
    });

    $(audioPlayer).on("play", function() {
        let v = audioPlayer.volume;
        if(!isNaN(v)) {
            volume.val(v);
        }
    });

    $(audioPlayer).on('timeupdate', function () {
        let value = (audioPlayer.currentTime/audioPlayer.duration);
        if(!isNaN(value)) {
            progress.val(value);
        }
    });

    $(volume).on('change', function () {
        let value = $(this).val();
        if(!isNaN(value)) {
            audioPlayer.volume = value;
        }
    });
} ());