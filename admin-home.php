<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafeteria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" crossorigin="anonymous">
  <link class="styles" rel="stylesheet" href="admin-home.css">
</head>
<body>

<?php include 'partions/admin-navbar.html'; ?>

<div class="container-fluid px-4 px-md-5 my-5">
  <div class="row g-5">
    
    <div class="col-lg-5 border-divider pe-lg-5">
      <div class="card order-card p-4 shadow-sm border-0">
        <h3 class="section-title mb-4 fw-bold">Current Order</h3>
        
        <div class="table-responsive flex-grow-1" style="max-height: 350px; overflow-y: auto;">
          <table class="table table-borderless align-middle mb-0">
            <tbody id="cart-items">
              <tr>
                <td colspan="4" class="text-muted text-center py-4">No items added yet.</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div id="cart-warning" class="text-danger fw-bold small mt-1 d-none">Please add at least one product to your order!</div>

        <hr class="my-4">

        <div class="mb-4">
          <label for="order-notes" class="form-label fw-bold text-secondary">Notes</label>
          <textarea class="form-control bg-light" id="order-notes" rows="3" placeholder="1 Tea Extra Sugar..."></textarea>
        </div>

        <div class="mb-4">
          <label for="room-select" class="form-label fw-bold text-secondary">Room</label>
          <select class="form-select bg-light" id="room-select">
            <option selected disabled value="">Choose Room...</option>
            <option value="101">Room 101</option>
            <option value="102">Room 102</option>
            <option value="201">Room 201</option>
          </select>
          <div id="room-warning" class="text-danger fw-bold small mt-1 d-none">Please select a room number!</div>
        </div>

        <div class="total-box d-flex justify-content-between align-items-center p-3 bg-light rounded-3 mb-4">
          <span class="total-text h4 mb-0 fw-bold">Total:</span>
          <div>
            <span class="total-price h3 mb-0 fw-bolder text-success" id="total-price">0</span>
            <span class="egp fw-bold text-success ms-1">EGP</span>
          </div>
        </div>

        <button class="btn confirm-btn w-100 py-3 fw-bold shadow-sm" id="confirmBtn">Confirm Order</button>
      </div>
    </div>

    <div class="col-lg-7 ps-lg-5">
      <div class="card menu-card p-4 shadow-sm border-0">
        
        <div class="row g-3 mb-4 align-items-center">
          <div class="col-md-7">
            <label class="form-label fw-bold text-secondary">Add to user</label>
            <select class="form-select bg-light" id="user-select">
              <option selected disabled value="">Choose User...</option>
              <option value="Islam Askar">Islam Askar</option>
              <option value="Ahmed Ali">Ahmed Ali</option>
              <option value="Sara Mohamed">Sara Mohamed</option>
            </select>
            <div id="user-warning" class="text-danger fw-bold small mt-1 d-none">Please select a user!</div>
          </div>
          <div class="col-md-5">
            <label class="form-label fw-bold text-secondary">Search</label>
            <div class="input-group">
              <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
              <input type="text" id="search-input" class="form-control bg-light border-start-0" placeholder="Search product...">
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="row row-cols-2 row-cols-sm-3 g-4" id="products-container"></div>

      </div>
    </div>

  </div>
</div>

<?php include 'partions/footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="admin-home.js"></script>
</body>
</html>