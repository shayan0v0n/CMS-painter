<?php 

require_once '../vendor/autoload.php';
use Server\GetterDB;
use Server\Security\AntiXSS;

$getDatabase = new GetterDB();
$antiXSS = new AntiXSS();
$drawingDatas = $getDatabase-> getData('drawings');
$cloneDrawingDatas = $drawingDatas;
$admin = $getDatabase-> getData('admin');
$currentAdmin = isset($_COOKIE['authStatus']);

$drawingSpliceOne = array_splice($cloneDrawingDatas,0, 4);
$cloneDrawingDatas = $drawingDatas;
$drawingSpliceTwo = array_splice($cloneDrawingDatas,4, 4);
$cloneDrawingDatas = $drawingDatas;
$drawingSpliceThree = array_splice($cloneDrawingDatas,8, 4);
$cloneDrawingDatas = $drawingDatas;
$drawingSpliceFour = array_splice($cloneDrawingDatas,12, 4);
$cloneDrawingDatas = $drawingDatas;
$drawingSpliceFive = array_splice($cloneDrawingDatas,16, 4);
$cloneDrawingDatas = $drawingDatas;
$drawingSpliceSix = array_splice($cloneDrawingDatas,20, 4);
$cloneDrawingDatas = $drawingDatas;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/index.css">
    <link rel="stylesheet" href="/public/lib/animate/index.css">
    <title>Drawings - Ali Nasir</title>
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
                    <a class="nav-link active" href="./drawings">drawings</a>
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
<main>
    <div class="mt-5 mb-5 text-center">
        <h2 class="">DRAWINGS</h2>
        <hr class="m-auto w-25">
    </div>
    
    <div class="py-3 text-center container mx-auto" style="margin: 120px 0">
        <?php if (isset($drawingDatas[0])) { ?>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <?php if (count($drawingSpliceOne) !== 0) { ?>
                        <div class="carousel-item row active">
                            <?php foreach($drawingSpliceOne as $drawing) {?>
                                <div class="col-12 col-md-3 m-auto p-1">
                                    <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php if (count($drawingSpliceTwo) !== 0) { ?>
                    <div class="carousel-item row">
                        <?php foreach($drawingSpliceTwo as $drawing) {?>
                            <div class="col-12 col-md-3 m-auto p-1">
                                <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (count($drawingSpliceThree) !== 0) { ?>
                    <div class="carousel-item row">
                        <?php foreach($drawingSpliceThree as $drawing) {?>
                            <div class="col-12 col-md-3 m-auto p-1">
                                <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (count($drawingSpliceFour) !== 0) { ?>
                    <div class="carousel-item row">
                        <?php foreach($drawingSpliceFour as $drawing) {?>
                            <div class="col-12 col-md-3 m-auto p-1">
                                <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (count($drawingSpliceFive) !== 0) { ?>
                    <div class="carousel-item row">
                        <?php foreach($drawingSpliceFive as $drawing) {?>
                            <div class="col-12 col-md-3 m-auto p-1">
                                <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (count($drawingSpliceSix) !== 0) { ?>
                    <div class="carousel-item row">
                        <?php foreach($drawingSpliceSix as $drawing) {?>
                            <div class="col-12 col-md-3 m-auto p-1">
                                <img src="/drawings/<?= $antiXSS->hsc($drawing['title'])?>.jpg" alt="<?= $antiXSS->hsc($drawing['title']) ?>" title="<?= $antiXSS->hsc($drawing["title"])?>" onclick="this.requestFullscreen()" style="cursor: pointer" class="w-100 p-3 m-0 border rounded" height="200" />
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        <?php } else { ?>
            <div>
                <h2 class="text-center my-5">No Drawing Yet!</h2>
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
    <script src="/public/controller/drawing.js"></script>
</html>