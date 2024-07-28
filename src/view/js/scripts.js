window.onscroll = function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
