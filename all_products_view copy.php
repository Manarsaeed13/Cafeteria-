<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="fw-bold text-success">All Products</h1>
        <a href="index.php?page=add_product" class="btn btn-success btn-lg shadow-sm">+ Add Product</a>
    </div>

    <div class="table-responsive shadow-lg rounded-4 overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-success text-white">
                <tr>
                    <th class="p-3 fs-5">Product</th>
                    <th class="p-3 fs-5">Price</th>
                    <th class="p-3 fs-5 text-center">Image</th>
                    <th class="p-3 fs-5 text-center">Action</th>
                </tr>
            </thead>
            <tbody id="productTableBody" style="background-color: #E7E1B1;">
                <!-- Data will be loaded here via JavaScript -->
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tableBody = document.getElementById('productTableBody');
    
    let products = JSON.parse(localStorage.getItem('cafeteria_products')) || [];

    function renderProducts() {
        tableBody.innerHTML = '';
        if (products.length === 0) {
            tableBody.innerHTML = '<tr><td colspan="4" class="text-center p-5 text-muted">No products found. Add some!</td></tr>';
            return;
        }

        products.forEach(product => {
            const row = `
                <tr>
                    <td class="p-3 fw-semibold fs-5">${product.name}</td>
                    <td class="p-3 fs-5">${product.price} EGP</td>
                    <td class="p-3 text-center">
                        <img src="${product.image || 'https://via.placeholder.com/50'}" width="60" height="60" class="border border-2 rounded p-1 bg-white shadow-sm object-fit-cover">
                    </td>
                    <td class="p-3 text-center">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <span class="badge ${product.status === 'Available' ? 'bg-success' : 'bg-secondary'} fs-6 px-3 py-2">
                                ${product.status}
                            </span>
                            <a href="index.php?page=edit_product&id=${product.id}" class="btn btn-dark shadow-sm">Edit</a>
                            <button class="btn btn-danger shadow-sm" onclick="deleteProduct(${product.id})">Delete</button>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    }

    window.deleteProduct = function(id) {
        if (confirm('Are you sure you want to delete this product?')) {
            products = products.filter(p => p.id !== id);
            localStorage.setItem('cafeteria_products', JSON.stringify(products));
            renderProducts();
        }
    };

    renderProducts();
});
</script>
