<?php 
require_once './../public/server/GetterDB.php';
$getDatabase = new GetterDB();
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
    <link rel="stylesheet" href="./public/styles/contact.css">
    <link rel="stylesheet" href="/public/lib/animate/index.css">
    <title>Contact - Ali Nasir</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg">
  <div class="container">
        <?php if(!$currentAdmin) { ?>
            <a class="navbar-brand active" href="/">Ali Nassir</a>
        <?php } else { ?>
            <a class="navbar-brand active" href="./mydashboard">Ali Nassir</a>
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
                    <a class="nav-link" href="./publications">publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./contact">contact</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
</header>

<main>
    <div class="my-5">
        <div class="mt-5 mb-3 text-center">
            <h1>Contact</h1>
            <hr class="m-auto w-25">
        </div>
        <div class="text-center contact-links animate__animated animate__fadeIn">
            <span>+49 176 23 96 60 27</span>
            <br>
            <span>a.nassir1951@gmail.com</span>
            <br>
            <span>www.a-nassir.com</span>
        </div>
    </div>
    <hr class="m-auto w-50">
    <div class="container">
        <form class="m-5 animate__animated animate__fadeInUp" action="../public/server/Actions/add_contact_list.php" method="post">
            <div class="row my-3">
                <div class="col-12 col-md-6 my-3">
                    <input type="text" class="form-control" placeholder="Your Name..." id="nameInput" name="contactName">
                </div>
                <div class="col-12 col-md-6 my-3">
                    <input type="email" class="form-control" placeholder="Your Email..." id="emailInput" name="contactEmail">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Subject..." id="subjectInput" name="contactSubject">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea type="email" class="form-control" placeholder="Message..." id="messageInput" name="contactMessage"></textarea>
                </div>
            </div>
            <button type="submit" class="btn w-100 form-btn" id="submitBtn">Submit</button>
        </form>
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
    <script src="/public/controller/contactValidation.js"></script>
</html>