<?php 
require_once './../public/server/GetterDB.php';
$getDatabase = new GetterDB();
$admin = $getDatabase-> getData('admin');
$currentAdmin = $_COOKIE['authStatus'];
$drawingList = $getDatabase-> getData('drawings');

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
        <h2>Drawings Dashboard</h2>
        <span>Dear <?= $admin[0]['name']?>, You Can Set Your Drawings Here.</span>
        <hr class="m-auto w-25">
    </div>

    <div>
        <div class="container">
                <form class="m-5 animate__animated animate__fadeInUp" enctype="multipart/form-data" action="../public/server/Actions/add_drawing_list.php" method="post">
                    <div class="my-3">
                        <input type="text" class="form-control" placeholder="Drawing Title..." id="titleInput" name="drawingTitle">
                    </div>
                    <div class="my-3">
                        <div>
                            <label for="formFile" class="form-label">Enter Your Drawing File...</label>
                            <input class="form-control" type="file" id="fileInput" multiple="true" name="drawingFile[]">
                        </div>
                    </div>
                    <button type="submit" class="btn w-100 form-btn" id="submitBtn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div>
        <?php if(sizeof($drawingList) == 0) {?>
            <div>
                <h2 class="text-center my-5">No Publication Yet!</h2>
            </div>
        <?php }else {?>
            <div class="accordion container my-5" id="accordion">
                <?php foreach($drawingList as $item) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?= $item['id']?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $item['id']?>" aria-expanded="false" aria-controls="collapseTwo">
                            <?= $item['title']?>
                        </button>
                        </h2>
                        <div id="collapse<?= $item['id']?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $item['id']?>" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <h2>Drawing Title: <?= $item['title']?></h2>
                            <img src="/drawings/<?= $item['title']?>.jpg" alt="<?= $item['title'] ?>" style="cursor: pointer" class="w-25 p-3 m-auto border rounded" />
                            <div class="text-end">
                                <a href="/public/server/Actions/delete_drawing_list.php/?drawingId=<?= $item['title']?>">
                                    <img src="/public/assets/imgs/trash-icon.png" style="cursor: pointer;" />
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
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
<script src="/public/controller/drawingDashboard.js"></script>
</html>