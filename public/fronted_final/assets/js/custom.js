window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true, // Set loop to true for infinite looping
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false, // Prevent autoplay from pausing on hover
        nav: true, // Enable navigation
        //navText: ['<button type="button" role="presentation" class="owl-prev"><span class="owl-prev">‹</span><button>', '<button type="button" role="presentation" class="owl-next"><span class="owl-next">›</span>'], // Custom navigation icons
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

function togglePasswordVisibility(inputId) {
    var input = $("#" + inputId);
    var icon = $("#toggle-" + inputId);
    if (input.attr("type") === "password") {
        input.attr("type", "text");
        icon.removeClass("fas fa-eye").addClass("fas fa-eye-slash");
    } else {
        input.attr("type", "password");
        icon.removeClass("fas fa-eye-slash").addClass("fas fa-eye");
    }
}

$(document).ready(function() {
    $('#create-password').on('input', function() {
        var password = $(this).val();
        
        // If password is empty, hide strength, strength bar, and password match
        if (password.trim() === '') {
            hidePasswordElements();
            return;
        }

        // Otherwise, calculate strength
        var strength = 0;

        // Check length
        if (password.length >= 8) {
            strength += 1;
        }

        // Check uppercase letters
        if (password.match(/[A-Z]/)) {
            strength += 1;
        }

        // Check lowercase letters
        if (password.match(/[a-z]/)) {
            strength += 1;
        }

        // Check numbers
        if (password.match(/\d/)) {
            strength += 1;
        }

        // Check special characters
        if (password.match(/[!@#$%^&*(),.?":{}|<>]/)) {
            strength += 1;
        }

        // Display strength and set color
        var strengthText = "";
        var progressWidth = 0;
        switch (strength) {
            case 0:
            case 1:
                strengthText = "Weak";
                progressWidth = 20;
                $('#password-strength').removeClass().addClass('weak');
                break;
            case 2:
                strengthText = "Moderate";
                progressWidth = 40;
                $('#password-strength').removeClass().addClass('moderate');
                break;
            case 3:
                strengthText = "Fair";
                progressWidth = 60;
                $('#password-strength').removeClass().addClass('moderate');
                break;
            case 4:
                strengthText = "Strong";
                progressWidth = 80;
                $('#password-strength').removeClass().addClass('strong');
                break;
            case 5:
                strengthText = "Very Strong";
                progressWidth = 100;
                $('#password-strength').removeClass().addClass('very-strong');
                break;
        }
        $('#password-strength').text('Password Strength: ' + strengthText);
        $('#progress-value').css('width', progressWidth + '%');
        showPasswordElements();
    });

    $('#confirm-password').on('input', function() {
        var confirm_password = $(this).val();
        var create_password = $('#create-password').val();

        if (confirm_password === create_password) {
            $('#password-match').removeClass().addClass('password-match').text('Passwords Match');
        } else {
            $('#password-match').removeClass().addClass('password-not-match').text('Passwords Do Not Match');
        }
    });

    // Function to hide password elements
    function hidePasswordElements() {
        $('#password-strength').hide();
        $('#password-progress').hide();
        $('#password-match').hide();
    }

    // Function to show password elements
    function showPasswordElements() {
        $('#password-strength').show();
        $('#password-progress').show();
    }

    // Initial check for password field value on page load
    $('#create-password').trigger('input');
});