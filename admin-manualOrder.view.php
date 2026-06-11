<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/manualOrder.css">

    <style>

        th {
            background-color: #E7E1B1 !important;
            color: #0D530E !important;
            font-size: larger;
        }

        td {
            background-color: #FBF5DD !important;
            color: #0D530E !important;
            font-size: large;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <?php require "partions/admin-navbar.php" ?>

    <h1 class="container order_header">Orders</h1>

    <div class="container w-75" >
        <table class="table rounded-4 overflow-hidden">
            <tr>
                <th>Order Date</th>
                <th>Name</th>
                <th>Room</th>
                <th>Ext.</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>2026-11-11</td>
                <td>Mohamed Ammar</td>
                <td>204</td>
                <td>1002</td>
                <td><button class="btn btn-success">Deliver</button></td>
            </tr>

        </table>
    </div>







    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>