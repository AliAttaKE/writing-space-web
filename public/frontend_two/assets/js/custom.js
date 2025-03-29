window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true, // Set loop to true for infinite looping
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false, // Prevent autoplay from pausing on hover
        nav: true, // Enable navigation
        navText: ["<span class='owl-prev'>‹</span>", "<span class='owl-next'>›</span>"], // Custom navigation icons
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
});

