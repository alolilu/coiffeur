var backButton = document.getElementById("backToTop");

window.addEventListener("scroll", function() {
    if (document.documentElement.scrollTop > 1000) {
        backButton.style.opacity = 1;
    } else {
        backButton.style.opacity = 0;
    }
});

backButton.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});