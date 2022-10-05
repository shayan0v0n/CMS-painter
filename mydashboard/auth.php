<?php
require_once '../vendor/autoload.php';
use Server\GetterDB;
$getDatabase = new GetterDB();
$admin = $getDatabase-> getData('admin');

if ($_POST) {
    if ($admin[0]['name'] == $_POST['name'] && $admin[0]['password'] == $_POST['password']) {
        setcookie('authStatus', true, time() + (86400000 * 30), "/");
        header("location: /mydashboard");
    }else {
        header("location: /");
    }
}

$currentAdmin = isset($_COOKIE['authStatus']);
if ($currentAdmin) 
    header("location: /mydashboard");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/index.css">    
    <link rel="stylesheet" href="/public/lib/animate/index.css">
    <title>...Auth Form...</title>
</head>
<body>

<h1 class="text-center mt-5">...Authentication Form...</h1>

<div class="container mt-5 border rounded" >
    <form class="p-5" action="auth.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UserName</label>
            <input type="text" class="form-control" id="nameInput" aria-describedby="emailHelp" placeholder="Username..." name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Password..." name="password">
        </div>
        <button id="submitBtn" type="submit" class="btn btn-primary w-100">LOGIN</button>
    </form>
</div>

</body>
<script src="/public/lib/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/public/lib/bootstrap/bootstrap.min.js"></script>
<script src="/public/lib/bootstrap/popper.min.js"></script>
<script src="/public/lib/jquery/index.js"></script>
<script src="/mydashboard/auth.js"></script>
</html>