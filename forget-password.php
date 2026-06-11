<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Forgot Password</title>

<link rel="stylesheet" href="css/bootstrap.css">

<style>

body{
    background-color:#FBF5DD;
}

.box{
    width:400px;
    margin:100px auto;
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

h2{
    color:#0D530E;
    text-align:center;
    margin-bottom:20px;
}

.btn-send{
    background:#0D530E;
    color:white;
    width:100%;
}

</style>

</head>



<body>
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
    ">
    Forget Password
    </a>

</div>
<div class="box">

<h2>Forgot Password</h2>

<form action="verify-code.php">

<label>Email</label>

<input 
type="email"
class="form-control mb-3"
placeholder="Enter your email"
>

<button class="btn btn-send">
Send Code
</button>

</form>

</div>

</body>
</html>