// Click event for opening the model
document.querySelector(".Click-here").addEventListener('click', function () {
    document.querySelector(".custom-model-main").classList.add('model-open');
});

// Click events for closing the model
var closeButtons = document.querySelectorAll(".close-btn, .bg-overlay");
closeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        document.querySelector(".custom-model-main").classList.remove('model-open');
    });
});
