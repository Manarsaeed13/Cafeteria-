<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cafeteria </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background: #f5f1ed;
}


.custom-navbar {
  background: #FBF5DD;
  border-radius: 20px;
  padding: 12px 24px;
  border: 1px solid rgba(48, 109, 41, 0.2);
}

a {
  text-decoration: none !important;
}

.menu-toggle-btn {
  background: transparent;
  border: none;
  color: #0D530E;
  font-size: 26px;
  padding: 0;
  cursor: pointer;
  display: flex;
  align-items: center;
  transition: transform 0.2s ease;
}

.menu-toggle-btn:hover {
  transform: scale(1.05);
  color: #306D29;
}


.brand {
  font-weight: 800;
  font-size: 22px;
  color: #0D530E;
  text-decoration: none;
}

.nav-links-desktop {
  display: flex;
  align-items: center;
  gap: 10px;
}

.nav-link-custom {
  text-decoration: none;
  color: #0D530E;
  font-weight: 700;
  font-size: 15px;
  position: relative;
  padding: 8px 16px;
  transition: color 0.3s ease;
}

.nav-link-custom:hover {
  color: #306D29;
}

.nav-link-custom.active::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 16px;
  right: 16px;
  height: 3px;
  background: #306D29;
  border-radius: 10px;
}


.login-btn {
  background-color: #0D530E;
  color: #FBF5DD !important;
  font-weight: 700;
  padding: 10px 24px;
  border-radius: 30px;
  text-decoration: none;
  transition: all 0.2s ease;
}

.login-btn:hover {
  background-color: #306D29;
  box-shadow: 0 4px 12px rgba(13, 83, 14, 0.2);
}

.custom-sidebar {
  background-color: #FBF5DD !important; 
  border-right: 2px solid rgba(48, 109, 41, 0.15);
  width: 300px !important;
}

.sidebar-header {
  border-bottom: 1px solid rgba(48, 109, 41, 0.1);
  padding: 20px;
}

.sidebar-link {
  display: flex;
  align-items: center;
  gap: 15px;
  text-decoration: none;
  color: #0D530E;
  font-weight: 700;
  font-size: 16px;
  padding: 14px 20px;
  border-radius: 12px;
  margin-bottom: 8px;
  transition: all 0.2s ease;
}

.sidebar-link:hover, .sidebar-link.active {
  background-color: #0D530E;
  color: #FBF5DD;
}

.sidebar-admin-box {
  margin-top: auto; 
  border-top: 1px solid rgba(48, 109, 41, 0.1);
  padding-top: 20px;
}

.admin-img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 10px;
  border: 2px solid #0D530E;
}

.admin-name {
  font-size: 15px;
  font-weight: 700;
  color: #0D530E;
}

.admin-role {
  font-size: 12px;
  color: gray;
}


.brand,
.brand:focus,
.brand:active,
.brand:focus-visible {
  outline: none !important;
  box-shadow: none !important;
  text-decoration: none !important;
  color: #0D530E !important;
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
      <a class="nav-link-custom active" href="admin_home.php">Home</a>
      <a class="nav-link-custom" href="products.php">Products</a>
      <a class="nav-link-custom" href="admin_users.php">Users</a>
      <a class="nav-link-custom" href="manual_order.php">Manual Order</a>
      <a class="nav-link-custom" href="checks.php">Checks</a>
    </div>

    <div class="d-flex align-items-center">
      <a href="#" class="login-btn">Log in</a>
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
      
      <a href="admin_home.php" class="sidebar-link active">
        <i class="bi bi-house-door-fill"></i> Home
      </a>
      
      <a href="products.php" class="sidebar-link">
        <i class="bi bi-box-seam-fill"></i> Products
      </a>
      
      <a href="admin_users.php" class="sidebar-link">
        <i class="bi bi-people-fill"></i> Users
      </a>
      
      <a href="manual_order.php" class="sidebar-link">
        <i class="bi bi-cart-plus-fill"></i> Manual Order
      </a>
      
      <a href="checks.php" class="sidebar-link">
        <i class="bi bi-receipt-cutoff"></i> Checks
      </a>

      <div class="sidebar-admin-box d-flex align-items-center gap-3">
        <img src="https://via.placeholder.com/60" class="admin-img" alt="Admin">
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