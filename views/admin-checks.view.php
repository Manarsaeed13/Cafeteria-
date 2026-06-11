<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/checks.css">

    <style>
.custom-pagination .page-link {
    color: #0D530E; 
    background-color: #ffffff; 
    border-color: #E7E1B1; 
    margin: 0 4px; 
    border-radius: 8px !important;
    font-weight: bold;
}

.custom-pagination .page-link:hover {
    background-color: #E7E1B1;
    color: #0D530E;
    border-color: #E7E1B1;
}

.custom-pagination .page-item.active .page-link {
    background-color: #E7E1B1; 
    border-color: #E7E1B1;
    color: #0D530E;
}


    </style>
</head>

<body>

    <?php require "partions/admin-navbar.php" ?>

    <h1 class="container check_header">Checks</h1>

    <form class="check_form">
        <label for="dateFrom">Date from</label>
        <input type="date" id="dateFrom">

        <label for="DateTo">Date to</label>
        <input type="date" id="DateTo">

        <select class="selectForm">
            <option disabled selected>Users</option>
            <option>Mohammed ammar</option>
        </select>
        <input type="submit" value="Filter" class="sumbitForm">
    </form>



    <div class="check_table accordion container w-75" id="myAccordion">

        <table class="table rounded-4 overflow-hidden">
            <tr>
                <th>User Name</th>
                <th>Total Amount</th>
            </tr>
            <tr>
                <td><a href="#0" data-bs-toggle="collapse">Mohamed Ammar</a></td>
                <td>500</td>
            </tr>
            <tr>
                <td><a href="#1" data-bs-toggle="collapse">ahmed ali</a></td>
                <td>1000</td>
            </tr>
        </table>

        <div class="collapse container" id="0" data-bs-parent="#myAccordion">
            <table class="table">
                <caption style="caption-side: top !important;"> Mohamed Ammar's orders</caption>
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10-5-2026</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
        </div>



        <div class="collapse container" id="1" data-bs-parent="#myAccordion">
            <table class="table">
                <caption style="caption-side: top !important;"> Ahmed Ali's orders</caption>
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8-2-2011</td>
                        <td>1000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <nav class="mt-4 mb-5">
        <ul class="pagination justify-content-center custom-pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>







    <?php require "partions/footer.php" ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>