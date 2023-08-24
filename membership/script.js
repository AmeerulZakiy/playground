function togglePopup(popupId) {
    var overlay = document.getElementById('custom-overlay');
    var popup = document.getElementById(popupId);
    if (popup.style.opacity === "1") {
      closePopup(popupId);
    } else {
      overlay.style.display = "block";
      popup.style.display = "block";
      overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
      popup.style.animation = "fadeIn 0.3s ease";
      setTimeout(function() {
        popup.style.opacity = "1";
      }, 0);
    }
  }
  
  function closePopup(popupId) {
    var popup = document.getElementById(popupId);
    var overlay = document.getElementById('custom-overlay');
    popup.style.animation = "fadeOut 0.3s ease";
    popup.style.opacity = "0";
    setTimeout(function() {
      popup.style.display = "none";
      overlay.style.backgroundColor = "rgba(0, 0, 0, 0)";
      setTimeout(function() {
        overlay.style.display = "none";
      }, 300);
    }, 300);
  }
  
  function closeAllPopups() {
    var popups = document.querySelectorAll('.custom-popup');
    var overlay = document.getElementById('custom-overlay');
    popups.forEach(function(popup) {
      popup.style.animation = "fadeOut 0.3s ease";
      popup.style.opacity = "0";
      setTimeout(function() {
        popup.style.display = "none";
        overlay.style.backgroundColor = "rgba(0, 0, 0, 0)";
        setTimeout(function() {
          overlay.style.display = "none";
        }, 300);
      }, 300);
    });
  }