
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Learn and check</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!--Font Awesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #e9e9e9;
      box-sizing: border-box;
      overflow-x: hidden;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .container {
      margin-left: -24px;
    }

    .container1 img {
      width: 50px;
      height: 50px;
      border-radius: 60px;
      margin-top: 5px;
      margin-bottom: 5px;
      margin-left: 5px;
    }

    .text-quiz {
      font-weight: bold;
      font-size: 39px;
      color: black;

    }

    .navbar-nav {
      margin-left: 9px;
    }

    .navbar .text h1 {
      font-weight: bold;
      font-size: 35px;
      color: black;
    }


    .icon-white {
      color: white;
    }

    .text-white {
      color: white;
    }

    .text-black {
      color: black;
    }

    .icon-text {
      font-size: 17px;
      margin: 3px 13px;
    }

    .icon-text i {
      margin-right: 2px;
    }

    .big-text {
      color: #fff;
      font-weight: bold;
      font-size: 35px;
      margin: 20px 0px;
      padding-left: 55px;
    }

    .you {
      color: #fff;
      font-size: 20px;
      padding-left: 55px;
    }

    a.btn {
      margin: 30px 196px;
      width: 150px;
      padding: 10px;
      border-radius: 20px;
    }

    a.btn-first {
      background: #f57435;
      border: 1px solid #f57435;
      color: #333;
    }

    a.btn:hover {
      background: #f57435;
      border: none;
      color: #fff;
      box-shadow: 5px 5px 10px #999;
      transition: 0.3s;
    }

    .banner-info {
      margin: 30px 0;
    }

    .container2 {
      background: linear-gradient(to right, #9f9a9a 0%, #021b42 100%);
    }

    .item {
      margin-top: 10px;
    }

    .item i {
      font-size: 1.5em;
      font-weight: 900;
      padding: 0.90rem;
      color: rgb(202, 16, 13);
      border: 2px solid rgb(245, 227, 126);
      box-shadow: 5px 5px 10px #999;
      background: rgb(250, 185, 166);
      border-radius: 20%;
      transition: all 0.5s ease-in-out;
      margin-bottom: 20px;
    }

    .item i:hover {
      background: cornflowerblue;
      color: #021b42;
    }

    .icon-size {
      font-size: 30px;
    }

    .container3 .row {
      margin: auto;
      /* margin-left:230px; */
    }


    .inner-container {
      width: 80%;
      margin: auto;
    }

    .image1 {
      width: 340px;
      height: 340px;
      border-radius: 50%;
    }

    .orbit {
      margin-left: -216px;
    }

    .container5 footer {
      width: 100%;
    }

    .some-class {

      width: 50%;
      margin: auto;
    }

    .section {
      background-color: #f57435;
      box-shadow: 5px 5px 10px #999;
      width: 50%;
    }

    .container4 {
      background-color: #f57435;
      box-sizing: border-box;
      background-color: rgba(0, 0, 0, 0.6);
    background-blend-mode: darken;

    }

    .container4 .edu1 {
      width: 264px;
      height: 368px;
      margin-left: 50px;
      border-radius: 50%;
      box-shadow: 5px 5px 10px #021b42;
    }

    .container4 .edu2 {
      width: 264px;
      height: 368px;
      margin-left: 50px;
      border-radius: 50%;
      margin-top: 30px;
      box-shadow: 5px 5px 10px #021b42;
    }
    .container5
      {
        margin-top:10px;
        width:100%;
      }
    .roots {
      color: #fff;
      font-weight: bold;
      font-size: 45px;
      margin: 20px 0px;
      padding-left: 55px;
    }
    .container6
      {
        overflow: hidden;
        background-image: url(images/image5.jpg);
        box-shadow: 5px 5px 10px #7d9abd;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.7);
    background-blend-mode: darken;
        background-position: center;
        height: 300px;
        margin-top: 20px;
      }
    .design p {
      padding: 8px;
      color: #fff;
    }
    .banner-info1
      {
        margin: 0px;
      }
      .navbar img {
      width: 50px;
      height: 50px;
      border-radius: 60px;
      margin-top: 5px;
      margin-bottom: 5px;
      margin-left: 5px;
      margin-right: 5px;
    }
    nav
      {
        background: linear-gradient(to left,#9f9a9a 0%,  #021b42 100%);
      }
  </style>
</head>

<body>
 
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <span><a href=""><img src="images/brainimg.jpg" alt="quiz"></a></span>
      <a class="navbar-brand quiz-text" href="#">QUIZ</a>
      <button class="navbar-toggler text-white Toggle-my" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon Toggle-my"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active icon-white text-white icon-text" href="Home.php"><span><i class="fa-solid fa-house"></i></span> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  icon-white text-white icon-text" href="AboutUs.php"><span><i class="fa-solid fa-users"></i></span> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  icon-white text-white icon-text" href="contact.php"><span><i class="fa-solid fa-phone"></i></span> contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  icon-white text-white icon-text" href="logout.php"><span><i class="fa-solid fa-right-to-bracket"></i> Log Out</a>
          </li>

      </div>


    </div>
  </nav>

  <div class="container2">
    <div class="row">
      <div class="col-sm-6 banner-info">
        <p class="big-text">Enhaced Your Skill With The Best <br> Online Quiz</p>
        <p class="you">Welcome <?php echo @$_SESSION['username']?></p>
        <a href="quiz.html" class="btn btn-first">START QUIZ</a>
      </div>
      <div class="col-sm-6 banner-info">
        <img src="images/image2.jpg" alt="big image" class="img-responsive">
      </div>
    </div>
  </div>
  <div class="container3 text-center my-5">
    <div class="row inner-container">
      <div class="col-md-4 item">
        <i class="fa-sharp fa-solid fa-book icon-size"></i>
        <h3>Unlimited Material</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero mollitia ab deserunt pariatur
          saepe! </p>
      </div>

      <div class="col-md-4 item middle">
        <i class="fa-regular fa-award"></i>
        <h3>Interactive Quiz</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero mollitia ab deserunt pariatur
          saepe! </p>
      </div>

      <div class="col-md-4 item">
        <i class="fa-solid fa-computer"></i>
        <h3>Online Learning</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero mollitia ab deserunt pariatur
          saepe! </p>
      </div>
    </div>
  </div>

  <div class="container4">
    <div class="row">
      <div class="col-sm-6 col-xs-12 banner-info">
        <img src="images/edu1.jpg" alt="big image" class="img-responsive edu1">
        <img src="images/edu3.jpg" alt="big image" class="img-responsive edu2">
      </div>
      <div class="col-sm-6 col-xs-12  banner-info">
        <p class="big-text roots">The roots of education are <br> bitter,but the fruit is sweet.</p>
        <p class="you">Start learning and have fun.</p>
      </div>
    </div>
  </div>

  <div class="container6">
    <div class="row">
      <div class="col-sm-6 banner-info1 text-center">
        <p class="text-white font-weight-bold big-text ">QUIZ RULE</p>
        <p class="text-white ">1. YOU CANNOT SKIP ANY QUESTION.</p>
        <p class="text-white">2. YOU CANNOT GO TO PREVIOUS QUESTION.</p>
        <p class="text-white">3. TRY TO ATTEMPTING ALL QUESTION.</p>
        <p class="text-white text-uppercase">4. EACH RIGHT ANSWER CARRIES - 1 MARK & WRONG ANSWER CARRIES - 0
          MARK.</p>
      </div>
      <!-- <div class="col-sm-6 banner-info1">
        <img src="img/image1.jpg" alt="big image" class="img-responsive blue-image">
      </div> -->
    </div>
  </div>

  <div class="container5">

    <footer class="text-center text-lg-start" style="background:linear-gradient(to right, #f5c1a7 0%, #1d5fc9 100%);">
      <div class="container5 d-flex justify-content-center py-5">
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b; border-radius: 40%;">
          <i class="fab fa-facebook-f"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;border-radius: 40%;">
          <i class="fab fa-youtube"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;border-radius: 40%;">
          <i class="fab fa-instagram"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;border-radius: 40%;">
          <i class="fab fa-twitter"></i>
        </button>
      </div>
  
      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://QuizzyOnline.com/">QuizzyOnline.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    
  </div>

  <!-- End of .container -->
</body>

</html>