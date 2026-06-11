document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    const form = document.getElementById('addProductForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            // Check HTML5 validity
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Custom file validation (optional but recommended)
            const fileInput = document.getElementById('productImage');
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
                if (fileSize > 2) {
                    alert("File size must be less than 2MB");
                    event.preventDefault();
                    fileInput.classList.add('is-invalid');
                }
            }

            form.classList.add('was-validated');
        }, false);

        // Real-time feedback for inputs
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                if (this.checkValidity()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            });
        });

        // Reset validation states on form reset
        form.addEventListener('reset', function() {
            form.classList.remove('was-validated');
            inputs.forEach(input => {
                input.classList.remove('is-valid', 'is-invalid');
            });
        });
    }
});