// optional: mute and pause the video on click
document.querySelector('.video-container video').addEventListener('click', function () {
  if (this.paused) {
    this.play();
  } else {
    this.pause();
  }
});

new WOW().init();


/* AUTHOR LINK */
$(document).ready(function() {
  $('.about-me-img').hover(function() {
    $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
  }, function() {
    $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
  });
});
