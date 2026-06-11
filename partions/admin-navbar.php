<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafeteria Navigation Component</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif !important;
      background: #FBF5DD !important;
    }

    a {
      text-decoration: none !important;
    }

    .custom-navbar {
      background-color: #0D530E !important;
      background: #0D530E !important;
      border-radius: 20px !important;
      padding: 12px 24px !important;
      border: 1px solid rgba(251, 245, 221, 0.2) !important;
    }

    .menu-toggle-btn {
      background: transparent !important;
      border: none !important;
      color: #FBF5DD !important;
      font-size: 26px !important;
      padding: 0 !important;
      cursor: pointer !important;
      display: flex !important;
      align-items: center !important;
      transition: transform 0.2s ease !important;
    }

    .menu-toggle-btn:hover {
      transform: scale(1.05) !important;
      color: #ffffff !important;
    }

    .brand {
      font-weight: 800 !important;
      font-size: 22px !important;
      color: #FBF5DD !important;
      text-decoration: none !important;
    }

    .brand, .brand:focus, .brand:active, .brand:focus-visible {
      outline: none !important;
      box-shadow: none !important;
      text-decoration: none !important;
    }

    .nav-links-desktop {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
    }

    .nav-link-custom {
      text-decoration: none !important;
      color: rgba(251, 245, 221, 0.7) !important;
      font-weight: 700 !important;
      font-size: 15px !important;
      position: relative !important;
      padding: 8px 16px !important;
      transition: color 0.3s ease !important;
    }

    .nav-link-custom:hover, 
    .nav-link-custom.active {
      color: #FBF5DD !important;
    }

    .nav-link-custom.active::after {
      content: '' !important;
      position: absolute !important;
      bottom: -4px !important;
      left: 16px !important;
      right: 16px !important;
      height: 3px !important;
      background-color: #FBF5DD !important;
      border-radius: 10px !important;
    }


    .custom-sidebar {
      background-color: #FBF5DD !important; 
      background: #FBF5DD !important; 
      border-right: 2px solid rgba(48, 109, 41, 0.15) !important;
      width: 300px !important;
    }

    .sidebar-header {
      border-bottom: 1px solid rgba(48, 109, 41, 0.1) !important;
      padding: 20px !important;
    }

    .custom-sidebar .brand {
      color: #0D530E !important;
    }

    .sidebar-link {
      display: flex !important;
      align-items: center !important;
      gap: 15px !important;
      text-decoration: none !important;
      color: #0D530E !important;
      font-weight: 700 !important;
      font-size: 16px !important;
      padding: 14px 20px !important;
      border-radius: 12px !important;
      margin-bottom: 8px !important;
      transition: all 0.2s ease !important;
    }

    .sidebar-link:hover, 
    .sidebar-link.active {
      background-color: #0D530E !important;
      background: #0D530E !important;
      color: #FBF5DD !important;
    }

    .sidebar-admin-box {
      margin-top: auto !important; 
      border-top: 1px solid rgba(48, 109, 41, 0.1) !important;
      padding-top: 20px !important;
    }

    .admin-img {
      width: 50px !important;
      height: 50px !important;
      object-fit: cover !important;
      border-radius: 10px !important;
      border: 2px solid #0D530E !important;
    }

    .admin-name {
      font-size: 15px !important;
      font-weight: 700 !important;
      color: #0D530E !important;
    }

    .admin-role {
      font-size: 12px !important;
      color: gray !important;
    }

    .order-card, .menu-card {
      background: rgba(255, 255, 255, 0.4) !important;
      border-radius: 16px !important;
    }

    @media (min-width: 992px) {
      .border-divider {
        border-right: 2px solid rgba(13, 83, 14, 0.12) !important;
      }
    }

    .form-control, .form-select {
      border-radius: 10px !important;
      border: 1px solid rgba(0, 0, 0, 0.08) !important;
    }

    .form-control:focus, .form-select:focus {
      border-color: #0D530E !important;
      box-shadow: 0 0 0 0.25rem rgba(13, 83, 14, 0.15) !important;
    }

    .confirm-btn {
      background-color: #0D530E !important;
      color: #FBF5DD !important;
      border: none !important;
      border-radius: 12px !important;
      font-weight: 700 !important;
      transition: all 0.2s ease-in-out !important;
    }

    .confirm-btn:hover {
      background-color: #306D29 !important;
      box-shadow: 0 4px 12px rgba(13, 83, 14, 0.2) !important;
      transform: translateY(-1px) !important;
    }

    .product-item {
      transition: all 0.2s ease-in-out;
    }

    .product-item:hover {
      border-color: #0D530E !important;
      transform: translateY(-2px);
    }

    .custom-cart-table {
      table-layout: fixed !important;
      width: 100% !important;
      border-collapse: collapse !important;
    }

    .custom-cart-table td {
      padding: 12px 4px !important;
      vertical-align: middle !important;
      background: transparent !important;
      background-color: transparent !important;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06) !important;
    }

    .cart-btn-wrapper {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <nav class="custom-navbar shadow-sm d-flex align-items-center justify-content-between">
    
    <div class="d-flex align-items-center gap-3">
      <button class="menu-toggle-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#dribbbleSidebar">
        <i class="bi bi-list"></i>
      </button>
      
      <a class="brand d-flex align-items-center gap-2" href="#">
        <i class="bi bi-cup-hot-fill"></i> CAFETERIA
      </a>
    </div>

    <div class="d-none d-md-flex nav-links-desktop">
      <a class="nav-link-custom active" href="admin-home.php">Home</a>
      <a class="nav-link-custom" href="products.php">Products</a>
      <a class="nav-link-custom" href="users.php">Users</a>
      <a class="nav-link-custom" href="manual_order.php">Manual Order</a>
      <a class="nav-link-custom" href="checks.php">Checks</a>
    </div>
 
  </nav>
</div>

<div class="offcanvas offcanvas-start custom-sidebar d-flex flex-column" tabindex="-1" id="dribbbleSidebar">
  
  <div class="sidebar-header d-flex align-items-center justify-content-between">
    <a class="brand d-flex align-items-center gap-2" href="#">
      <i class="bi bi-cup-hot-fill"></i> CAFETERIA
    </a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="filter: invert(21%) sepia(82%) saturate(518%) hue-rotate(74deg) brightness(91%) contrast(97%);"></button>
  </div>

  <div class="offcanvas-body p-3">
    <div class="d-flex flex-column h-100">
      
      <a href="admin-home.php" class="sidebar-link active">
        <i class="bi bi-house-door-fill"></i> Home
      </a>
      
      <a href="products.php" class="sidebar-link">
        <i class="bi bi-box-seam-fill"></i> Products
      </a>
      
      <a href="users.php" class="sidebar-link">
        <i class="bi bi-people-fill"></i> Users
      </a>
      
      <a href="manual_order.php" class="sidebar-link">
        <i class="bi bi-cart-plus-fill"></i> Manual Order
      </a>
      
      <a href="checks.php" class="sidebar-link">
        <i class="bi bi-receipt-cutoff"></i> Checks
      </a>

      <div class="sidebar-admin-box d-flex align-items-center gap-3">
        <img src="images\Ultra_realistic_studio_portrait,_soft_202605292224.jpeg" class="admin-img" alt="Admin">
        <div>
          <div class="admin-name">Samantha W</div>
          <div class="admin-role">Admin</div>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>