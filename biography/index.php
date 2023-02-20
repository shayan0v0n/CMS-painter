<?php 
require_once '../vendor/autoload.php';
use Server\GetterDB;
use Server\Security\AntiXSS;
use Server\SetterDB;

$getDatabase = new GetterDB();
$setDatabase = new SetterDB();
$antiXSS = new AntiXSS();
$admin = $getDatabase-> getData('admin');
$biography = $getDatabase-> getData('biography');
$currentAdmin = isset($_COOKIE['authStatus']);

$getBio = $getDatabase->getCustomData("biography", "id", 1);
if (count($getBio) === 0) {
    $setDatabase->setBioDefault();
}

$getEductions = $getDatabase->getData("eductions");
$getTeachings = $getDatabase->getData("teachings");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/index.css">
    <link rel="stylesheet" href="/public/styles/biography.css">
    <link rel="stylesheet" href="/public/lib/animate/index.css">
    <title>Biography - Ali Nasir</title>
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
                    <a class="nav-link active" href="./biography">biography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./exhibitions">exhibitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./press">press</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./publications">publications</a>
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

<main class="container text-center">
    <div class="my-5">
        <div class="mt-5 mb-3 text-center">
            <h1>biography</h1>
            <hr class="m-auto w-25">
        </div>
    </div>
    <div class="my-5 m-auto row">
        <div class="col-12 col-md-5 text-center">
            <img src="/biography/<?= $antiXSS->hsc($biography[0]["img_link"])?>" class="w-75 rounded m-auto m-3 animate__animated animate__fadeInLeft" />
        </div>
        <div class="col-12 col-md-7 d-flex text-start align-items-center">
            <div class="m-3 animate__animated animate__fadeInRight">
                <div class="d-flex flex-column bio-section-1">
                    <span><?= $antiXSS->hsc($biography[0]["fullName"])?></span>
                    <span>Born in <?= $antiXSS->hsc($biography[0]["where_born"])?> <?=$antiXSS->hsc($biography[0]["when_born"])?></span>
                    <span>Lives and works in <?= $antiXSS->hsc($biography[0]["when_live_and_work"])?></span>
                </div>
                <div class="py-3 bio-section-2">
                    <h2 class="py-1">EDUCATION</h2>
                    <?php foreach($getEductions as $eduction) { ?>
                        <p><span><?=  $antiXSS->hsc($eduction["date"])?></span><span class="m-5"><?=  $antiXSS->hsc($eduction["description"])?></span></p>
                    <?php }?>
                </div>
                <div class="py-3 bio-section-3">
                    <h2 class="py-1">TEACHINGS</h2>
                    <?php foreach($getTeachings as $teachs) { ?>
                        <p><span><?=  $antiXSS->hsc($teachs["date"])?></span><span class="m-5"><?=  $antiXSS->hsc($teachs["description"])?></span></p>
                    <?php }?>
                </div>
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