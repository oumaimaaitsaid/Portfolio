document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Form validation
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const message = document.getElementById('message');
        let isValid = true;

        if (name.value.trim() === '') {
            isValid = false;
            name.classList.add('error');
        } else {
            name.classList.remove('error');
        }

        if (email.value.trim() === '' || !isValidEmail(email.value)) {
            isValid = false;
            email.classList.add('error');
        } else {
            email.classList.remove('error');
        }

        if (message.value.trim() === '') {
            isValid = false;
            message.classList.add('error');
        } else {
            message.classList.remove('error');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});