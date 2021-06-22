objectFitVideos();

const video = document.querySelector('#video');
const btnPause = document.querySelector('#btnPause')
const btnAudio = document.querySelector('#btnAudio');

video.volume = .3;

btnPause.addEventListener('click', () => {

    if ( video.paused ) {

        video.play();

    } else {

        video.pause();

    }

});

btnAudio.addEventListener('click', () => {

    if ( video.muted == true ) {

        video.muted = false;

    } else {

        video.muted = true;

    }

})