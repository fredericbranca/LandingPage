document.addEventListener('DOMContentLoaded', function() {
    var scrollToTopButton = document.querySelector('.scroll-to-top');

    scrollToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Afficher la flèche lorsque l'utilisateur descend sur la page
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) { // Seuil de défilement vertical (200 pixels)
            scrollToTopButton.style.opacity = '1';
            scrollToTopButton.style.pointerEvents = 'auto';
        } else {
            scrollToTopButton.style.opacity = '0';
            scrollToTopButton.style.pointerEvents = 'none';
        }
    });
});