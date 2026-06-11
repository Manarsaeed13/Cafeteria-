document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    const form = document.getElementById('addProductForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Stop real submission for frontend prototype

            if (!form.checkValidity()) {
                event.stopPropagation();
                form.classList.add('was-validated');
                return;
            }

            // --- PROTOTYPE LOGIC: Save to LocalStorage ---
            const newProduct = {
                id: Date.now(),
                name: document.getElementById('productName').value,
                price: document.getElementById('productPrice').value,
                category: document.getElementById('productCategory').options[document.getElementById('productCategory').selectedIndex].text,
                status: 'Available',
                image: 'https://cdn-icons-png.flaticon.com/512/1828/1828843.png' // Placeholder
            };

            // Get existing products or empty array
            let products = JSON.parse(localStorage.getItem('cafeteria_products')) || [];
            
            // Add new product
            products.push(newProduct);
            
            // Save back to LocalStorage
            localStorage.setItem('cafeteria_products', JSON.stringify(products));

            alert("Product added successfully (Frontend Prototype)!");
            window.location.href = 'all_products.html'; // Redirect to list
        }, false);

        // Real-time feedback
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
    }
});