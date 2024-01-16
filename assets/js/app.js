function initImageComparison(wrapper) {
    let active = false;
    let scroller = wrapper.querySelector('.scroller');
    let after = wrapper.querySelector('.after');

    // Gestion des événements pour cette paire d'images
    scroller.addEventListener('mousedown', function(e) {
        active = true;
        scroller.classList.add('scrolling');
        handleMouseMove(e);
    });

    document.body.addEventListener('mouseup', function() {
        active = false;
        scroller.classList.remove('scrolling');
    });

    document.body.addEventListener('mouseleave', function() {
        active = false;
        scroller.classList.remove('scrolling');
    });

    document.body.addEventListener('mousemove', function(e) {
        if (!active) return;
        handleMouseMove(e);
    });

    scroller.addEventListener('touchstart', function(e) {
        active = true;
        scroller.classList.add('scrolling');
        handleTouchMove(e);
    });

    document.body.addEventListener('touchend', function() {
        active = false;
        scroller.classList.remove('scrolling');
    });

    document.body.addEventListener('touchcancel', function() {
        active = false;
        scroller.classList.remove('scrolling');
    });

    // Fonction pour gérer le déplacement du curseur pour cette paire d'images
    function handleMouseMove(e) {
        let x = e.pageX - wrapper.getBoundingClientRect().left;
        scrollIt(x);
    }

    function handleTouchMove(e) {
        let touch = e.touches[0];
        if (touch) {
            let x = touch.pageX - wrapper.getBoundingClientRect().left;
            scrollIt(x);
        }
    }

    // Fonction pour effectuer le déplacement du curseur
    function scrollIt(x) {
        let transform = Math.max(0, Math.min(x, wrapper.offsetWidth));
        after.style.width = transform + "px";
        scroller.style.left = transform - scroller.offsetWidth / 2 + "px";
    }

    // Initialisation de l'état de départ
    scrollIt(wrapper.offsetWidth / 2);
}

// Sélectionnez toutes les paires d'images et initialisez-les
let imagePairs = document.querySelectorAll('.avant_apres .wrapper');
imagePairs.forEach(function(wrapper) {
    initImageComparison(wrapper);
});


var container = document.getElementById('google_avis1');
var slider = document.getElementById('slider');
var slides = document.getElementsByClassName('slide').length;
var currentPosition = 0;



function updateSliderPosition() {
    var slideWidth = slider.clientWidth;
    var newPosition = -currentPosition * slideWidth;
    slider.style.transform = 'translateX(' + newPosition + 'px)';
}



var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = slides - slidesPerPage;
var containerWidth = container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;

function setParams(w) {
    if (w < 551) {
        slidesPerPage = 1;
    } else {
        if (w < 901) {
            slidesPerPage = 2;
        } else {
            if (w < 1101) {
                slidesPerPage = 3;
            } else {
                slidesPerPage = 4;
            }
        }
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
    };
    currentMargin = -currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
        buttons[1].classList.add('inactive');
    }
}

setParams();
