<?php 

require_once '../vendor/autoload.php';
use Server\GetterDB;
use Server\Security\AntiXSS;

$getDatabase = new GetterDB();
$antiXSS = new AntiXSS();
$publicationsData = $getDatabase-> getData('publications');
$admin = $getDatabase-> getData('admin');
$currentAdmin = isset($_COOKIE['authStatus']);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/index.css">
    <link rel="stylesheet" href="/public/styles/publications.css">
    <link rel="stylesheet" href="/public/lib/animate/index.css">
    <title>Publications - Ali Nasir</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg">
  <div class="container">
        <?php if(!$currentAdmin) { ?>
                <a class="navbar-brand" href="/">Ali Nassir</a>
        <?php } else { ?>
            <a class="navbar-brand" href="./mydashboard">Ali Nassir</a>
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
                    <a class="nav-link" href="./paintings">Paintings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./drawings">drawings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./biography">biography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./exhibitions">exhibitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./press">press</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./publications">publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact">contact</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
</header>

<main>
    <div class="mt-5 mb-3 text-center">
        <h2>SELECTED PUBLICATIONS BY ALI NASSIR</h2>
        <hr class="m-auto w-25">
    </div>
    <div class="row m-0 py-3 text-center">
        <?php if (isset($publicationsData[0])) { ?>
            <?php foreach($publicationsData as $publication) {?>
                <div class="col-12 m-auto animate__animated animate__fadeIn">
                    <div class="card m-2">
                        <p class="card-title"><?= $antiXSS->hsc($publication['name'])?></p>
                        <a href="/publications/<?= $antiXSS->hsc($publication['link']) ?>.pdf" class="card-text"><?= $antiXSS->hsc($publication['title'])?></a>
                    </div>
                </div>
            <?php }?>
        <?php } else { ?>
            <div>
                <h2 class="text-center my-5">No Publication Yet!</h2>
            </div>
        <?php } ?>
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