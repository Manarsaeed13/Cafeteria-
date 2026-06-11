
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <style>

        body{
            background-color:#FBF5DD;
            font-family: Arial, sans-serif;
        }

        .orders-container{
            background:#fff;
            padding:30px;
            border-radius:15px;
            margin-top:40px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        h2{
            color:#0D530E;
            font-weight:bold;
        }

        .table thead{
            background-color:#306D29;
            color:white;
        }

        .status-processing{
            color:orange;
            font-weight:bold;
        }

        .status-delivery{
            color:blue;
            font-weight:bold;
        }

        .status-done{
            color:green;
            font-weight:bold;
        }

        .btn-cancel{
            background-color:#0D530E;
            color:white;
            border:none;
        }

        .btn-view{
            background-color:#306D29;
            color:white;
            border:none;
        }

    </style>

</head>
<body style="background:#FBF5DD; font-family:Arial;">

<div style="
background:#FBF5DD;
padding:20px 40px;
display:flex;
justify-content:center;
gap:50px;
border-radius:20px;
width:80%;
margin:30px auto;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
">

    <a href="#" style="
    text-decoration:none;
    color:#0D530E;
    font-weight:bold;
    font-size:20px;
    ">
    Home
    </a>

    <a href="#" style="
    text-decoration:none;
    color:#0D530E;
    font-weight:bold;
    font-size:20px;
    border-bottom:3px solid #306D29;
    padding-bottom:5px;
    ">
    My Orders
    </a>

</div>



<div class="container">

    <div style="
    background:white;
    padding:30px;
    border-radius:15px;
    margin-top:40px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    ">

        <h2 style="color:#0D530E;">
            My Orders
        </h2>

        <br>

        <table class="table table-bordered text-center">

            <thead style="
            background:#306D29;
            color:white;
            ">

                <tr>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>2025/05/30</td>

                    <td style="color:orange;">
                        Processing
                    </td>

                    <td>55 EGP</td>

                    <td>
                        <button class="btn btn-success">
                            View
                        </button>
                    </td>

                    <td>
                        <button class="btn btn-danger">
                            Cancel
                        </button>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

</body>
