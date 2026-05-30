<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

  body{
    background:#f6f5f2;
    font-family:'Poppins',sans-serif;
  }

  /* NAVBAR */

  .main-navbar{

    width:85%;

    margin:30px auto;

    background:#ece7cf;

    border-radius:28px;

    padding:20px 35px;

    box-shadow:0 2px 10px rgba(0,0,0,0.05);
    background: #FBF5DD;

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


  /* MOBILE */

  @media(max-width:991px){

    .main-navbar{

      width:95%;

    }

    .navbar-nav{

      margin-top:20px;

      gap:10px;

    }

    .login-btn{

      margin-top:15px;

      width:100%;

    }

  }

</style>

<nav class="navbar navbar-expand-lg main-navbar">

  <div class="container-fluid">

    <!-- LEFT -->

    <div class="brand">

      <i class="fa-solid fa-bars menu-icon"></i>

      <a href="#" class="logo">

        <i class="fa-solid fa-mug-hot"></i>

        <span class="logo-text">
          CAFETERIA
        </span>

      </a>

    </div>

    <!-- TOGGLER -->

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarContent"
    >

      <span class="navbar-toggler-icon"></span>

    </button>

    <!-- LINKS -->

    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarContent"
    >

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="#">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            My Orders
          </a>
        </li>

      </ul>

    </div>

  </div>

</nav>
<style>
/* page */
.home-wrapper{

 width:85%;
 margin:20px auto 50px;

}

.section-title{

 color:#0b5d1e;
 font-weight:700;
 margin-bottom:25px;

}

 /* left side */

.order-card{

 background:#FBF5DD;
 border-radius:25px;
 padding:25px;
 box-shadow:0 2px 12px rgba(0,0,0,0.06);

}

.selected-item{

 display:flex;
 justify-content:space-between;
 align-items:center;
 margin-bottom:18px;

}

.item-name{

 font-weight:600;
 color:#0b5d1e;

}

.qty-box{

 display:flex;
 align-items:center;
 gap:10px;

}

.qty-btn{

 width:32px;
 height:32px;
 border:none;
 border-radius:50%;
 background:#0b5d1e;
 color:white;
 font-weight:700;
 transition:.3s;

}

.qty-btn:hover{

 background:#1d7a34;

}

.qty-number{

 min-width:25px;
 text-align:center;
 font-weight:600;

}

.price{

 font-weight:600;
 color:#444;

}

.notes-box textarea{

 border-radius:15px;
 resize:none;

}

.form-select{

 border-radius:15px;
 padding:12px;

}

.total-box{

 text-align:center;
 margin-top:25px;

}

.total-price{

 font-size:28px;
 font-weight:700;
 color:#0b5d1e;

  }

.confirm-btn{

 width:100%;
 border:none;
 margin-top:18px;
 background:#0b5d1e;
 color:white;
 padding:14px;
 border-radius:18px;
 font-weight:600;
 transition:.3s;

}

.confirm-btn:hover{

 background:#1d7a34;

}

  /* right side  */

.products-wrapper{

 background:#FBF5DD;
 border-radius:25px;
 padding:25px;
 box-shadow:0 2px 12px rgba(0,0,0,0.06);

  }

.top-bar{

 display:flex;
 justify-content:space-between;
 align-items:center;
 margin-bottom:30px;

}

.search-box{

 width:250px;
 border-radius:40px;
 padding:10px 20px;
 border:1px solid #ddd;

}

  /* USER */

.user-box{

 display:flex;
 align-items:center;
 gap:12px;

}

.user-box img{

 width:50px;
 height:50px;
 border-radius:50%;
 object-fit:cover;
 border:3px solid #0b5d1e;

}

.user-name{

 font-weight:600;
  color:#0b5d1e;

  }

  /* PRODUCTS */

.products-grid{

  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
  gap:22px;

  }

.product-card{

  background:white;
  border-radius:25px;
  padding:22px;
  text-align:center;
  cursor:pointer;
  transition:.35s;
  border:2px solid transparent;
  box-shadow:0 4px 15px rgba(0,0,0,0.06);


}

  

  .product-card:hover{

    transform:translateY(-5px);
    border-color:#0b5d1e;

  }

.product-card img{

  width:100px;
  height:100px;
  object-fit:cover;
  border-radius:15px;
  display:block;
  margin:0 auto 15px;
}

.product-name{

 font-weight:600;
 color:#0b5d1e;
 margin-bottom:5px;

}

  .product-price{

    color:#666;
    font-weight:500;

  }

  /* LATEST ORDER */

  .latest-order{

    margin-bottom:25px;

  }

  .latest-title{

    color:#0b5d1e;
    font-weight:700;
    margin-bottom:15px;

  }

  .latest-items{

    display:flex;
    gap:20px;
    flex-wrap:wrap;

  }

  .latest-item{

    background:white;
    padding:15px;
    border-radius:18px;
    text-align:center;
    min-width:120px;

  }

  .latest-item img{

    width:55px;

  }

  /* MOBILE */

  @media(max-width:991px){

    .home-wrapper{

      width:95%;

    }

  }

</style>

<!-- home page  -->

<div class="container-fluid home-wrapper">

  <div class="row g-4">

    <!-- LEFT SIDE -->

    <div class="col-lg-4">

      <div class="order-card">

        <h4 class="section-title">
          Your Order
        </h4>

        <!-- ITEM -->

        <div class="selected-item" data-name="Tea" data-price="25">

  <div>
    <div class="item-name">Tea</div>
    <div class="price">EGP 25</div>
  </div>

  <div class="qty-box">

    <button class="qty-btn" onclick="minus('Tea')">-</button>

    <span class="qty-number" id="Tea-qty">1</span>

    <button class="qty-btn" onclick="plus('Tea')">+</button>

  </div>

</div>

        <!-- ITEM -->

        <div class="selected-item" data-name="Coffee" data-price="30">

  <div>
    <div class="item-name">Coffee</div>
    <div class="price">EGP 30</div>
  </div>

  <div class="qty-box">

    <button class="qty-btn" onclick="minus('Coffee')">-</button>

    <span class="qty-number" id="Coffee-qty">2</span>

    <button class="qty-btn" onclick="plus('Coffee')">+</button>

  </div>

</div>
        <!-- NOTES -->

        <div class="notes-box mt-4">

          <label class="mb-2 fw-semibold">
            Notes
          </label>

          <textarea
            class="form-control"
            rows="4"
            placeholder="Write your notes..."
          ></textarea>

        </div>

        <!-- ROOM -->

        <div class="mt-4">

          <label class="mb-2 fw-semibold">
            Select Room
          </label>

          <select class="form-select">

            <option>
              Combo Box
            </option>

            <option>
              Room 1
            </option>

            <option>
              Room 2
            </option>

          </select>

        </div>

        <!-- TOTAL -->

        <div class="total-box">

          <div class="total-price">
            EGP 85
          </div>

        </div>

        <!-- BUTTON -->

        <button class="confirm-btn">

          Confirm Order

        </button>

      </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="col-lg-8">

      <div class="products-wrapper">

        <!-- TOP -->

        <div class="top-bar">

          <!-- USER -->

          <div class="user-box">

            <img src="https://i.pravatar.cc/100" alt="">

            <div class="user-name">
              Islam Askar
            </div>

          </div>

          <!-- SEARCH -->

          <input
            type="text"
            class="form-control search-box"
            placeholder="Search..."
          >

        </div>

        <!-- LATEST ORDER -->

        <div class="latest-order">

          <div class="latest-title">
            Latest Order
          </div>

          <div class="latest-items">

            <div class="latest-item">

              <h4 class="section-title">
                Your Order
              </h4>

            </div>

          </div>

        </div>

        <!-- PRODUCTS -->

        <div class="products-grid">

          <!-- PRODUCT -->

          <div class="product-card">

            <img src="../gallery/tea.jpg">

            <div class="product-name">
              Tea
            </div>

            <div class="product-price">
              EGP 25
            </div>

          </div>

          <!-- PRODUCT -->

          <div class="product-card">

            <img src="../gallery/coffee.jpg">

            <div class="product-name">
              Coffee
            </div>

            <div class="product-price">
              EGP 30
            </div>

          </div>

          <!-- PRODUCT -->

          <div class="product-card">

            <img src="../gallery/nescafee.jpg">

            <div class="product-name">
              Nescafe
            </div>

            <div class="product-price">
              EGP 40
            </div>

          </div>

          <!-- PRODUCT -->

          <div class="product-card">

            <img src="../gallery/cola.jpg">

            <div class="product-name">
              Cola
            </div>

            <div class="product-price">
              EGP 20
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<?php require 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/home.js"></script>
