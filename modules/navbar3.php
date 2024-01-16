<div class="navbar3" id="navbar3">
    <div class="row navpc">
        <div class="col-md-4">
            <img id="logoimg" src="assets/img/logo.png" alt="">
            <a href="javascript:void(0);" id="hamburger" class="icon" onclick="fonction_humberger()">
                <i id="hamburger-icon" class="fa fa-bars"></i>
            </a>
            <!-- <p id="Logo">Matelya beauty</p> -->
        </div>
        <div class="col-md-5">
            <ul>
                <li><a class="button-text" href="<?=$routes['home']?>">Accueil</a></li>
                <li><a class="button-text" href="<?=$routes['services']?>">Services</a></li>

                <li><a class="button-text" href="<?=$routes['galerie']?>">Galerie</a></li>
                <li><a class="button-text" href="<?=$routes['contact']?>">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <a class="getStarted" href="tel:0698385077"><i style="margin-right: 10px;" class="fa-solid fa-phone"></i>06
                98 38 50 77</a>
        </div>
    </div>
    <div class="nav-mobile">
        <ul>
            <li><i class="fa-solid fa-right-long"></i><a href="<?=$routes['home']?>">Accueil</a><i
                    class="fa-solid fa-left-long"></i></li>
            <li><i class="fa-solid fa-right-long"></i><a href="<?=$routes['services']?>">Services</a><i
                    class="fa-solid fa-left-long"></i></li>

            <li><i class="fa-solid fa-right-long"></i><a href="<?=$routes['galerie']?>">Galerie</a><i
                    class="fa-solid fa-left-long"></i></li>
            <li><i class="fa-solid fa-right-long"></i><a href="<?=$routes['contact']?>">Contact</a><i
                    class="fa-solid fa-left-long"></i></li>
        </ul>
    </div>
</div>

<script>
function fonction_humberger() {
    var y = document.getElementById("navbar3");
    var button = document.getElementById("hamburger");
    var icon = document.getElementById("hamburger-icon");
    var navMobile = document.querySelector(".nav-mobile");

    if (y.className === "navbar3") {
        y.className += " responsive";
        document.body.style.overflow = 'hidden';
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");
        navMobile.style.animation = "nav 0.5s linear 0s 1 normal forwards";
    } else {
        y.className = "navbar3";
        document.body.style.overflow = 'auto';
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        navMobile.style.animation = "nav-inverse 0.5s linear 0s 1 normal forwards";
    }
}


function navbartop() {
    var navbar3 = document.getElementById("navbar3");
    var scrollPosition = window.scrollY;
    var logoimg = document.getElementById('logoimg');
    var buttonLinks = document.querySelectorAll(".button-text");
    var name = document.getElementById('Logo');
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

    function updateNavbarAndLogo() {
        scrollPosition = window.scrollY; // Mettez à jour la position de défilement

        if (scrollPosition > 0) {
            navbar3.style.transition = "ease 0.2s";
            navbar3.style.backgroundColor = "black";
            logoimg.setAttribute('src', 'assets/img/logowhite.png');
            buttonLinks.forEach(function(buttonLink) {
                buttonLink.classList.add("white-text");
            });
            name.classList.add("white-text");
        } else {
            navbar3.style.transition = "ease 0.2s";
            navbar3.style.backgroundColor = isMobile ? "black" : "transparent";
            logoimg.setAttribute('src', isMobile ? 'assets/img/logowhite.png' : 'assets/img/logo.png');
            buttonLinks.forEach(function(buttonLink) {
                buttonLink.classList.remove("white-text");
            });
            name.classList.remove("white-text");
        }
    }

    window.addEventListener("scroll", updateNavbarAndLogo);
    window.addEventListener("resize", updateNavbarAndLogo);

    // Appel initial pour gérer l'état initial de la page
    updateNavbarAndLogo();

    // Gérez la couleur de la navbar et du logo lors du chargement initial de la page
    if (isMobile) {
        navbar3.style.backgroundColor = "rgb(32,33,36)";
        logoimg.setAttribute('src', 'assets/img/logowhite.png');
    } else {
        navbar3.style.backgroundColor = "transparent";
        logoimg.setAttribute('src', 'assets/img/logo.png');
    }
}

navbartop();
</script>