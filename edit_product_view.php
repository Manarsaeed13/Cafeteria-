<div class="container">
    <div class="card p-5 rounded-4 shadow-lg mx-auto border-0" style="max-width: 900px; background-color: #E7E1B1;">
        <h1 class="fw-bold mb-5 text-success">Edit Product</h1>

        <form id="editProductForm" class="needs-validation" novalidate>
            <input type="hidden" id="editProductId">
            
            <!-- Product Name -->
            <div class="row mb-4">
                <label for="productName" class="col-md-3 col-form-label fs-5 fw-semibold">Product</label>
                <div class="col-md-7">
                    <input type="text" id="productName" name="product_name" class="form-control form-control-lg border-2 border-success" required>
                    <div class="invalid-feedback">Please provide a product name.</div>
                </div>
            </div>

            <!-- Price -->
            <div class="row mb-4">
                <label for="productPrice" class="col-md-3 col-form-label fs-5 fw-semibold">Price</label>
                <div class="col-md-7">
                    <div class="input-group input-group-lg">
                        <input type="number" id="productPrice" name="price" class="form-control border-2 border-success" min="0.01" step="0.01" required>
                        <span class="input-group-text border-2 border-success fw-bold text-success">EGP</span>
                        <div class="invalid-feedback">Please enter a valid price.</div>
                    </div>
                </div>
            </div>

            <!-- Category -->
            <div class="row mb-4">
                <label for="productCategory" class="col-md-3 col-form-label fs-5 fw-semibold">Category</label>
                <div class="col-md-7">
                    <select id="productCategory" name="category" class="form-select form-select-lg border-2 border-success" required>
                        <option value="Hot Drinks">Hot Drinks</option>
                        <option value="Cold Drinks">Cold Drinks</option>
                        <option value="Snacks">Snacks</option>
                    </select>
                </div>
            </div>

            <!-- Product Picture -->
            <div class="row mb-5">
                <label for="productImage" class="col-md-3 col-form-label fs-5 fw-semibold">Product Picture</label>
                <div class="col-md-7">
                    <input type="file" id="productImage" class="form-control form-control-lg border-2 border-success" accept="image/*">
                    <div class="mt-3">
                        <p class="small text-muted mb-1">Current Image:</p>
                        <img id="currentImage" src="" alt="Current" class="img-thumbnail" style="max-height: 150px;">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row">
                <div class="col-md-7 offset-md-3 d-flex gap-3">
                    <button type="submit" class="btn btn-success btn-lg px-5 text-white fw-bold shadow-sm">Update Product</button>
                    <a href="index.php?page=all_products" class="btn btn-secondary btn-lg px-5 text-white fw-bold shadow-sm">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    const products = JSON.parse(localStorage.getItem('cafeteria_products')) || [];
    const product = products.find(p => p.id == productId);

    if (product) {
        document.getElementById('editProductId').value = product.id;
        document.getElementById('productName').value = product.name;
        document.getElementById('productPrice').value = product.price;
        document.getElementById('productCategory').value = product.category;
        document.getElementById('currentImage').src = product.image;
        document.getElementById('productImage').dataset.base64 = product.image;
    } else {
        alert("Product not found!");
        window.location.href = 'index.php?page=all_products';
    }
});

// Preview new image
document.getElementById('productImage').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('currentImage').src = event.target.result;
            document.getElementById('productImage').dataset.base64 = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.getElementById('editProductForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const id = document.getElementById('editProductId').value;
    let products = JSON.parse(localStorage.getItem('cafeteria_products')) || [];
    
    const index = products.findIndex(p => p.id == id);
    if (index !== -1) {
        products[index].name = document.getElementById('productName').value;
        products[index].price = document.getElementById('productPrice').value;
        products[index].category = document.getElementById('productCategory').value;
        products[index].image = document.getElementById('productImage').dataset.base64;

        localStorage.setItem('cafeteria_products', JSON.stringify(products));
        alert("Product updated successfully!");
        window.location.href = 'index.php?page=all_products';
    }
});
</script>
