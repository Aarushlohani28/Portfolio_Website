document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Dark Mode Toggle ---
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    const icon = themeToggle.querySelector('i');

    // Check local storage
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }

    themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        // Change icon based on mode and save to local storage
        if (body.classList.contains('dark-mode')) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            localStorage.setItem('theme', 'dark');
        } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            localStorage.setItem('theme', 'light');
        }
    });

    // --- 2. Mobile Menu Toggle ---
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // --- 3. Form Validation ---
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevent actual form submission for this demo
        let isValid = true;

        // Get values
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validation Logic
        if (name === '') {
            setError('name-error', 'Name is required');
            isValid = false;
        } else {
            clearError('name-error');
        }

        if (email === '' || !email.includes('@')) {
            setError('email-error', 'Please enter a valid email');
            isValid = false;
        } else {
            clearError('email-error');
        }

        if (message === '') {
            setError('message-error', 'Message cannot be empty');
            isValid = false;
        } else {
            clearError('message-error');
        }

        if (isValid) {
            const formData = new FormData(form);

            fetch('process_contact.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        form.reset();
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
        }
    });

    // Helper functions for errors
    function setError(id, message) {
        const element = document.getElementById(id);
        element.textContent = message;
        element.style.visibility = 'visible';
    }

    function clearError(id) {
        const element = document.getElementById(id);
        element.style.visibility = 'hidden';
    }
});