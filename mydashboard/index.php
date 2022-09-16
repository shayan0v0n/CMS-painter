<?php 
require_once './../public/server/GetterDB.php';
$getDatabase = new GetterDB();
$admin = $getDatabase-> getData('admin');
$currentAdmin = $_COOKIE['authStatus'];

if (!$currentAdmin) 
    header("location: /mydashboard/auth.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/index.css">
    <link rel="stylesheet" href="/public/styles/home.css">
    <link rel="stylesheet" href="/public/styles/auth.css">
    <link rel="stylesheet" href="/public/styles/dashboard.css">
    <title><?= $admin[0]['name']?>'s Dashboard</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg">
  <div class="container">
        <?php if(!$currentAdmin) { ?>
            <a class="navbar-brand active" href="/">Ali Nassir</a>
        <?php } else { ?>
            <a class="navbar-brand active" href="/mydashboard">Ali Nassir</a>
        <?php }?>
      <button class="navbar-toggler" type="button" id="collapse-btn">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="collapse-right">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paintings">Paintings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/drawings">drawings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/biography">biography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/exhibitions">exhibitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/press">press</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/publications">publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
</header>

<main>

<div class="m-5">
    <div class="mt-5 mb-3 text-center">
            <h2><?= $admin[0]['name']?>'s Dashboard</h2>
            <hr class="m-auto w-25">
    </div>

    <div class="row p-5">
        <div class="col-12 col-md-6">
            <a href="/mydashboard/paintingsDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Paintings</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/mydashboard/drawingsDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Drawings</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/mydashboard/exhibitionsDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Exhibitions</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/mydashboard/pressDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Press</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/mydashboard/publicationsDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Publications</h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/mydashboard/contactDashboard.php">
                <div class="card m-2">
                    <h2 class="p-5 text-center">Cantact</h2>
                </div>
            </a>
        </div>
    </div>
</div>
    
</main>
    
<footer>
    <div class="row py-3 m-0">
        <div class="col text-center">
            <span>© Copyright - Ali Nassir</span>
        </div>
        <div class="col text-center">
            <a href="/">Home</a>
            <span>|</span>
            <a href="./biography">Biography</a>
            <span>|</span>
            <a href="./contact">Contact</a>
        </div>
    </div>
</footer>
</body>
<script src="/public/lib/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/public/lib/bootstrap/bootstrap.min.js"></script>
<script src="/public/lib/bootstrap/popper.min.js"></script>
<script src="/public/lib/jquery/index.js"></script>
<script src="/public/controller/index.js"></script>
</html>