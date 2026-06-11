<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Verify Code</title>

<link rel="stylesheet" href="css/bootstrap.css">

<style>

body{
    background:#FBF5DD;
    font-family:Arial;
}

.verify-box{
    background:white;
    width:40%;
    margin:80px auto;
    padding:40px;
    border-radius:20px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

h2{
    color:#0D530E;
    text-align:center;
    margin-bottom:30px;
}

.btn-green{
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
border-bottom:3px solid #306D29;
padding-bottom:5px;
">
Verify Code
</a>


</div>

<div class="verify-box">

<h2>Verify Code</h2>

<form>

<div class="mb-3">
<label>Enter Code</label>
<input type="text" class="form-control">
</div>

<button class="btn btn-green">
Verify
</button>

</form>

</div>

</body>
</html>