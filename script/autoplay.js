document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('herbalVideo');

    // Clicking on the video to play/pause
    video.addEventListener('click', function() {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    });

    // Pausing/playing video using spacebar
    document.addEventListener('keydown', function(event) {
        if (event.code === 'Space' && event.target === document.body) {
            event.preventDefault(); // Prevent scrolling when pressing spacebar
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
    });
});