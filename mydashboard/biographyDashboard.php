<?php 
require_once '../vendor/autoload.php';
use Server\GetterDB;
use Server\SetterDB;

$getDatabase = new GetterDB();
$setDatabase = new SetterDB();
$admin = $getDatabase-> getData('admin');
$currentAdmin = $_COOKIE['authStatus'];
$exhibitionsList = $getDatabase-> getData('exhibitions');
$biography = $getDatabase-> getData('biography');

if (!$currentAdmin) 
    header("location: /mydashboard/auth.php");

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

<main class="container text-center">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Image Profile</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" action="../public/server/Actions/add_biography_information_image.php" method="post">
            <div class="my-3">
                <div>
                    <label for="fileInput" class="form-label">Enter Your Profile Image...</label>
                    <input class="form-control" type="file" id="fileInput" multiple="true" name="fileBio[]">
                </div>
            </div>
            <button type="submit" class="btn w-100 form-btn" id="submitBtn">Submit</button>
        </form>
        </div>
        </div>
    </div>
    </div>



    <div class="my-5">
        <div class="mt-5 mb-3 text-center">
            <h1>biography</h1>
            <hr class="m-auto w-25">
        </div>
    </div>
    <div class="my-5 m-auto row">
        <div class="col-12 col-md-5 text-center">
            <img src="/biography/<?= $biography[0]["img_link"]?>" class="w-75 rounded m-auto m-3 animate__animated animate__fadeInLeft" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" />
        </div>
        <div class="col-12 col-md-7 d-flex text-start align-items-center">
            <div class="m-3 animate__animated animate__fadeInRight">
                <div class="d-flex flex-column bio-section-1">
                    <form action="../public/server/Actions/add_biography_info.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="FullName" value="<?= $biography[0]["fullName"]?>" name="userName" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Born In</span>
                            </div>
                            <input type="text" class="form-control" placeholder="WHERE" value="<?= $biography[0]["where_born"]?>" name="whereBorn" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="text" class="form-control" placeholder="WHEN" value="<?= $biography[0]["when_born"]?>" name="whenBorn" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Live & Work In</span>
                            </div>
                            <input type="text" class="form-control" placeholder="WHERE" value="<?= $biography[0]["when_live_and_work"]?>" name="whenLiveAndWork" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button class="btn btn-primary w-100">Save</button>
                    </form>
                </div>
                <div class="py-3 bio-section-2">
                    <form action="../public/server/Actions/add_eduction_list.php" method="post">
                        <h2 class="py-1">EDUCATION</h2>
                        <?php foreach($getEductions as $eduction) { ?>
                            <p><span><?= $eduction["date"]?></span><span class="m-5"><?= $eduction["description"]?></span>
                            <a href="/public/server/Actions/delete_education_list.php/?educationID=<?= $eduction['id']?>">
                                <img src="/public/assets/imgs/trash-icon.png" style="cursor: pointer;" />
                            </a></p>
                        <?php }?>
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date</span>
                            </div>
                            <input type="text" class="form-control" name="whenEducation" placeholder="WHEN" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="text" class="form-control" name="descriptionEducation" placeholder="DESCRIPTION" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button class="btn btn-primary w-100">Save</button>
                    </form>
                </div>
                <div class="py-3 bio-section-2">
                <form action="../public/server/Actions/add_teaching_list.php" method="post">
                        <h2 class="py-1">TEACHINGS</h2>
                        <?php foreach($getTeachings as $teaching) { ?>
                            <p><span><?= $teaching["date"]?></span><span class="m-5"><?= $teaching["description"]?></span>
                            <a href="/public/server/Actions/delete_teaching_list.php/?teachingID=<?= $teaching['id']?>">
                                <img src="/public/assets/imgs/trash-icon.png" style="cursor: pointer;" />
                            </a>
                        </p>
                        <?php }?>
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date</span>
                            </div>
                            <input type="text" class="form-control" name="whenTeachings" placeholder="WHEN" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="text" class="form-control" name="descriptionTeachings" placeholder="DESCRIPTION" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button class="btn btn-primary w-100">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button class="w-100 btn btn-danger m-3">DELETE</button>
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
<script src="/public/controller/exhibitionDashboard.js"></script>
</html>