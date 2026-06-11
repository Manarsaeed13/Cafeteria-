<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
  <style>

  body{
    background:#FBF5DD;
    font-family:'Poppins',sans-serif;
  }

  /* NAVBAR */

  .main-navbar{
    width:85%;
    margin:30px auto;
    background:#FBF5DD;
    border-radius:28px;
    padding:20px 35px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
  }

  /* LEFT SIDE */

  .brand{
    display:flex;
    align-items:center;
    gap:15px;
  }

  .menu-icon{
    font-size:24px;
    color:#0b5d1e;
    cursor:pointer;
  }

  .logo{
    display:flex;
    align-items:center;
    gap:10px;
    text-decoration:none;
  }

  .logo i{
    color:#0b5d1e;
    font-size:28px;
  }

  .logo-text{
    color:#0b5d1e;
    font-size:22px;
    font-weight:700;
    letter-spacing:0.5px;
  }

  /* NAV LINKS */

  .navbar-nav{
    gap:30px;
  }

  .nav-link{
    color:#0b5d1e !important;
    font-weight:600;
    position:relative;
    transition:0.3s;
    font-size:17px;
  }

  .nav-link:hover{
    color:#1d7a34 !important;
  }

  .nav-link.active::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-10px;
    width:100%;
    height:3px;
    background:#1d7a34;
    border-radius:10px;
  }
  .guest-img{
        width:45px;
        height:45px;
        border-radius:50%;
        object-fit:cover;
    }

  /* Latest Order Icons */
  .latest-order-item {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #0b5d1e;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .latest-order-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* MOBILE */

  @media(max-width:991px){
    .main-navbar{
      width:95%;
    }
    .navbar-nav{
      margin-top:20px;
      gap:10px;
    }
  }

</style>

<nav class="navbar navbar-expand-lg main-navbar">
  <div class="container-fluid">
    <div class="brand">
      <i class="fa-solid fa-bars menu-icon"></i>
      <a href="#" class="logo">
        <i class="fa-solid fa-mug-hot"></i>
        <span class="logo-text">CAFETERIA</span>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Orders</a>
        </li>
      </ul>
    </div>

    <div class="d-flex align-items-center gap-3">
      <img src="https://i.pravatar.cc/100?img=1" class="guest-img">
      <strong class="d-none d-sm-inline">Ahmed Mohamed</strong>
    </div>
  </div>
</nav>

<div class="container-fluid px-4 px-md-5 my-5">
  <div class="row g-5">
    
    <!-- Left Column: Current Order Details -->
    <div class="col-lg-5 border-divider pe-lg-5">
      <div class="card order-card p-4 shadow-sm border-0">
  
        <div id="cart-warning" class="text-danger fw-bold small mt-1 d-none">Please add at least one product to your order!</div>

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

    <!-- Right Column: Latest Order & Menu -->
    <div class="col-lg-7 ps-lg-5">
      <div class="card menu-card p-4 shadow-sm border-0">
        
        <!-- Latest Order Section (Top Right) -->
        <div class="mb-4">
          <h5 class="fw-bold text-secondary mb-3">Latest Order</h5>
          <div id="latest-order-container" class="d-flex gap-3 align-items-center">
             <!-- Static placeholders as per screenshot, can be dynamic later -->
             <div class="latest-order-item"><img src="../images/Americano_iced_coffee_in_a_202605292104.jpg" alt=""></div>
             <div class="latest-order-item"><img src="../images/Berry_mojito_drink_in_a_202605292106.jpg" alt=""></div>
          </div>
        </div>

        <hr class="my-4">

        <!-- Search Section -->
        <div class="row g-3 mb-4 align-items-center">
          <div class="col-md-5">
            <label class="form-label fw-bold text-secondary">Search</label>
            <div class="input-group">
              <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
              <input type="text" id="search-input" class="form-control bg-light border-start-0" placeholder="Search product...">
            </div>
          </div>
        </div>

        <div class="row row-cols-2 row-cols-sm-3 g-4" id="products-container"></div>

      </div>
    </div>

  </div>
</div>

    <div id="footer-placeholder"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>