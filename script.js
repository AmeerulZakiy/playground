// optional: mute and pause the video on click
document.querySelector('.video-container video').addEventListener('click', function() {
  if (this.paused) {
    this.play();
  } else {
    this.pause();
  }
});