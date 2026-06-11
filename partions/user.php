<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

    html,body{
        min-height:100vh;
    }

    body{
        background:#f6f5f2;
        font-family:'Poppins',sans-serif;
        display:flex;
        flex-direction:column;
    }

    /* NAVBAR */

    .main-navbar{
    width:90%;
    margin:20px auto;
    padding:16px 30px;
    background:#FBF5DD;
    border-radius:20px;
}


    .logo{
    display:flex;
    align-items:center;
    gap:10px;
    text-decoration:none;
    justify-content:flex-start;
}

    .logo-text{
        color:#0b5d1e;
        font-size:24px;
        font-weight:700;
        letter-spacing:0.5px;
    }

    /* PAGE HEADER */

    .page-header{
        padding:10px 0;
    }

    .header-card{
    width:90%;
    margin:0 auto 25px;
    background:white;
    border-radius:20px;
    padding:25px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 4px 15px rgba(0,0,0,.05);
}

.page-title{
    color:#0b5d1e;
    font-weight:700;
    margin-bottom:5px;
}
   .add-btn{
    background:#0b5d1e;
    color:white;
    border:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
    transition:0.3s;
    box-shadow:0 4px 10px rgba(11,93,30,.25);
}

.add-btn:hover{
    transform:translateY(-2px);
}
    /* TABLE CARD */

    .table-card{
        background:white;
        border-radius:20px;
        padding:25px;
        box-shadow:0 5px 20px rgba(0,0,0,.06);
    }

    .guest-img{
        width:45px;
        height:45px;
        border-radius:50%;
        object-fit:cover;
    }

    .status-badge{
        background:#dff5e7;
        color:#198754;
        padding:8px 14px;
        border-radius:20px;
        font-size:14px;
    }

    .action-btn{
        width:40px;
        height:40px;
        border:none;
        border-radius:50%;
    }

    .edit-btn{
        background:#e7f0ff;
        color:#0d6efd;
    }

    .delete-btn{
        background:#ffe5e5;
        color:#dc3545;
    }

    .table tbody tr:hover{
        background:#f8fbff;
        transition:.3s;
    }

    .search-box{
        max-width:400px;
    }

    .container{
        flex:1;
    }

    /* FOOTER */

    .cafeteria-footer{
        background:#FBF5DD;
        padding:25px 50px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        flex-wrap:wrap;
        margin-top:40px;
    }

    .footer-logo{
        display:flex;
        align-items:center;
        gap:10px;
        color:#0b5d1e;
        font-size:22px;
        font-weight:700;
    }

    .footer-links{
        display:flex;
        gap:25px;
    }

    .footer-links a{
        text-decoration:none;
        color:#0b5d1e;
        font-weight:500;
    }

    .copyright{
        color:#666;
    }

    @media(max-width:768px){

        .main-navbar{
            width:95%;
        }

        .cafeteria-footer{
            flex-direction:column;
            text-align:center;
            gap:15px;
        }

    }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar main-navbar">
    <div class="container-fluid">

        <a href="#" class="logo">
            <span style="font-size:28px;">☕</span>
            <span class="logo-text">CAFETERIA</span>
        </a>

    </div>
</nav>

    <!-- Header -->
     
    <div class="header-card">
    <div>
        <h2 class="page-title">Guest Management</h2>
        <p class="text-muted mb-0">
            Manage hotel guests and cafeteria orders
        </p>
    </div>

    <button class="btn add-btn">
        + Add Guest
    </button>
</div>

    <div class="container my-5">

        <div class="table-card">

            <div class="d-flex justify-content-between mb-4 flex-wrap gap-3">

                <input
                    type="text"
                    id="searchInput"
                    class="form-control search-box"
                    placeholder="Search guest..."
                >

                <select class="form-select" style="width:200px">
                    <option>All Status</option>
                    <option>Checked In</option>
                </select>

            </div>

            <div class="table-responsive">

                <table class="table align-middle" id="guestTable">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest</th>
                        <th>Mobile Number</th>
                        <th>Room No.</th>
                        <th>Orders</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>01</td>

                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://i.pravatar.cc/100?img=1" class="guest-img">
                                <strong>Ahmed Mohamed</strong>
                            </div>
                        </td>

                        <td>01012345678</td>
                        <td>305</td>
                        <td>8</td>

                        <td>
                            <span class="status-badge">
                                ● Checked In
                            </span>
                        </td>

                        <td class="text-center">
                            <button class="action-btn edit-btn">✏️</button>
                            <button class="action-btn delete-btn deleteGuest">🗑️</button>
                        </td>
                    </tr>

                    <tr>
                        <td>02</td>

                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://i.pravatar.cc/100?img=5" class="guest-img">
                                <strong>Sara Ali</strong>
                            </div>
                        </td>

                        <td>01123456789</td>
                        <td>210</td>
                        <td>5</td>

                        <td>
                            <span class="status-badge">
                                ● Checked In
                            </span>
                        </td>

                        <td class="text-center">
                            <button class="action-btn edit-btn">✏️</button>
                            <button class="action-btn delete-btn deleteGuest">🗑️</button>
                        </td>
                    </tr>

                    <tr>
                        <td>03</td>

                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://i.pravatar.cc/100?img=10" class="guest-img">
                                <strong>Omar Hassan</strong>
                            </div>
                        </td>

                        <td>01234567890</td>
                        <td>412</td>
                        <td>12</td>

                        <td>
                            <span class="status-badge">
                                ● Checked In
                            </span>
                        </td>

                        <td class="text-center">
                            <button class="action-btn edit-btn">✏️</button>
                            <button class="action-btn delete-btn deleteGuest">🗑️</button>
                        </td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- Footer -->
    <footer class="cafeteria-footer">

        <div class="footer-links">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Support</a>
        </div>

        <div class="copyright">
            © 2026 Cafeteria. All rights reserved.
        </div>

    </footer>

    <script src="user.js"></script>

</body>
</html>