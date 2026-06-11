
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            let isValid = true;
            
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            
            // 1. Reset previous validation states
            resetValidation([email, password]);

            // 2. Email Validation (Regex for standard email format)
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value.trim())) {
                showError(email, "Please enter a valid email address (e.g., user@gmail.com).");
                isValid = false;
            }

            // 3. Password Validation (Mandatory check for length)
            if (password.value.length < 6) {
                showError(password, "Password must be at least 6 characters long.");
                isValid = false;
            }

            // 4. Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    }

    /**
     * Displays an error message for a specific input field
     */
    function showError(inputElement, message) {
        inputElement.classList.add('is-invalid');
        const errorDiv = inputElement.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.textContent = message;
            errorDiv.style.display = 'block';
        }
    }

    /**
     * Resets validation states for an array of input fields
     */
    function resetValidation(elements) {
        elements.forEach(el => {
            el.classList.remove('is-invalid');
            const errorDiv = el.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains('error-message')) {
                errorDiv.style.display = 'none';
            }
        });
    }

    // Optional: Real-time feedback as the user types
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim() !== "") {
                this.classList.remove('is-invalid');
                const errorDiv = this.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('error-message')) {
                    errorDiv.style.display = 'none';
                }
            }
        });
    });
});
