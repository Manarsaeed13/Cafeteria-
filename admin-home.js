let cart = [];
let allProducts = []; 

document.addEventListener("DOMContentLoaded", () => {
  const uniqueId = new Date().getTime();

  fetch(`./products.json?v=${uniqueId}`, { cache: "no-store" })
  .then(response => {
    if (!response.ok) throw new Error('Products JSON file not found');
    return response.json();
  })
  .then(products => {
    console.log(products);
    console.log("Count:", products.length);

    allProducts = products;
    displayProducts(allProducts);
    setupSearch();
  })
  .catch(error => {
    console.error(error);
  });
});

function setupSearch() {
  const searchInput = document.getElementById('search-input');
  if (!searchInput) return;

  searchInput.addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase().trim();
    const filteredProducts = allProducts.filter(product => 
      product.name.toLowerCase().includes(searchTerm)
    );
    displayProducts(filteredProducts);
  });
}

function displayProducts(products) {
  const container = document.getElementById('products-container');
  if (!container) return;
  container.innerHTML = ''; 

  if (products.length === 0) {
    container.innerHTML = `<div class="col-12 text-center text-muted py-4 fw-bold">No products found!</div>`;
    return;
  }

  products.forEach(product => {
    const productHtml = `
      <div class="col">
        <div class="product-item text-center p-3 position-relative border rounded-3 bg-white shadow-sm" style="cursor: pointer;" onclick="addToCartById(${product.id})">
          <div class="img-wrapper d-flex align-items-center justify-content-center mx-auto mb-3 rounded-circle bg-light border" style="width: 80px; height: 80px; overflow: hidden;">
            <img src="${product.image}" alt="${product.name}" class="img-fluid w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/51c/51c554.png';">
          </div>
          <span class="badge bg-success position-absolute top-0 end-0 m-2 px-2 py-1 fs-7 rounded-pill">${product.price} LE</span>
          <p class="product-name fw-bold text-dark mb-0 mt-2">${product.name}</p>
        </div>
      </div>
    `;
    container.innerHTML += productHtml;
  });
}

function addToCartById(id) {
  const product = allProducts.find(p => p.id === id);
  if (!product) return;

  const existingItem = cart.find(item => item.id === id);
  if (existingItem) {
    existingItem.quantity++;
  } else {
    cart.push({ id: product.id, name: product.name, price: product.price, quantity: 1 });
  }
  updateCartUI();
}

function changeQuantityById(id, amount) {
  const item = cart.find(item => item.id === id);
  if (item) {
    item.quantity += amount;
    if (item.quantity <= 0) {
      removeFromCartById(id);
      return;
    }
  }
  updateCartUI();
}

function removeFromCartById(id) {
  cart = cart.filter(item => item.id !== id);
  updateCartUI();
}

function updateCartUI() {
  const cartContainer = document.getElementById("cart-items");
  const totalPriceElement = document.getElementById("total-price");
  if (!cartContainer || !totalPriceElement) return;

  if (cart.length === 0) {
    cartContainer.innerHTML = `<tr><td colspan="4" class="text-muted text-center py-4">No items added yet.</td></tr>`;
    totalPriceElement.innerText = "0";
    return;
  }
  
  let html = "";
  let total = 0;
  
  cart.forEach(item => {
    let itemTotal = item.quantity * item.price;
    total += itemTotal;
    
    html += `
      <tr class="border-bottom align-middle">
        <td class="text-start fw-bold py-3 text-nowrap" style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">
          ${item.name}
        </td>
        <td class="text-center py-3">
          <div class="d-inline-flex align-items-center justify-content-center gap-2 bg-light p-1 rounded-3 border">
            <button class="btn btn-sm bg-danger text-white fw-bold d-flex align-items-center justify-content-center" style="width:24px; height:24px; padding:0; border-radius:5px;" onclick="changeQuantityById(${item.id}, -1)">-</button>
            <span class="fw-bold px-1" style="min-width: 20px; text-align: center;">${item.quantity}</span>
            <button class="btn btn-sm bg-success text-white fw-bold d-flex align-items-center justify-content-center" style="width:24px; height:24px; padding:0; border-radius:5px;" onclick="changeQuantityById(${item.id}, 1)">+</button>
          </div>
        </td>
        <td class="text-end fw-bold text-dark text-nowrap py-3">
          ${itemTotal} EGP
        </td>
        <td class="text-end pe-0 py-3">
          <button class="btn text-danger fw-bold bg-transparent border-0 p-0 fs-5" style="line-height: 1;" onclick="removeFromCartById(${item.id})">&times;</button>
        </td>
      </tr>
    `;
  });
  
  cartContainer.innerHTML = html;
  totalPriceElement.innerText = total;
}

document.getElementById("confirmBtn")?.addEventListener("click", function() {
  const userSelect = document.getElementById("user-select");
  const roomSelect = document.getElementById("room-select");
  
  const cartWarning = document.getElementById("cart-warning");
  const userWarning = document.getElementById("user-warning");
  const roomWarning = document.getElementById("room-warning");
  
  let hasError = false;

  if (cart.length === 0) {
    cartWarning.classList.remove("d-none");
    hasError = true;
  } else {
    cartWarning.classList.add("d-none");
  }

  if (!userSelect || userSelect.value === "") {
    userWarning?.classList.remove("d-none");
    userSelect?.classList.add("border-danger");
    hasError = true;
  } else {
    userWarning?.classList.add("d-none");
    userSelect?.classList.remove("border-danger");
  }

  if (!roomSelect || roomSelect.value === "") {
    roomWarning?.classList.remove("d-none");
    roomSelect?.classList.add("border-danger");
    hasError = true;
  } else {
    roomWarning?.classList.add("d-none");
    roomSelect?.classList.remove("border-danger");
  }

  if (hasError) return;

  window.location.href = "success.html";
});