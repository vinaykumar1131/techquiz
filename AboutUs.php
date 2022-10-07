<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
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

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
  <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container2 {
      background: linear-gradient(to right, #9f9a9a 0%, #021b42 100%);
    }
        hr{
            margin: 0%;
        }
        body{
            background-color: lightblue;
        }
        .About_1{
            margin: 30px;
            padding: 5px;
        }
        .About_1 h1{
            text-align: center;
            color: black;
            font-weight: bold;
        }
        .About_1 p{
            text-align: center;
            padding: 3px;
            color: #fff;
        }
        .About-item{
            margin-bottom: 20px;
            margin-top: 20px;
            background-color: white;
            padding: 80px, 30px;
            box-shadow: 0 0 9px rgba(0, 0, 0 .6);
        }
        .about-item-text-center i{
            font-size: 30px;
            margin: 0;
        }
        .About-item h3{
            font-size: 25px;
            margin-bottom: 10px;
        }
        .About-item hr{
            width: 46px;
            height: 3px;
            background-color: #5fbff9;
            margin: 0 auto;
            border: none;
        }
        .about-item-text-center{
            background-color: #fff;
            border-radius: 20%;
            text-align: center;
            padding: 10%;
            transition: all 2s,height 2s ,transform 2s;
        }
        .footer{
            text-align: center;
        /* width: 100%; */
        }
        .about-item p{
            margin-top: 20px;
        }
        .about-item-text-center:hover{
            background-color: aqua;
            transform: rotate(360deg);
        }
        i{
            transition: all 1s,height 1s ,transform 1s;
        }
        i:hover{
            transform: translateY(-30px);
        }
        ul{
            list-style-type: none;
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
    <section id="About">
        <div class="About_1">
            <h1>About Us</h1>
            <p style="color: black;">Interact is a tool for creating online quizzez that generate leads, segment your audience, and drive traffic to your website.<br>It is built for businesses and has all the features you will need to create your own lead generation quiz that grows your company. </p>
        </div>
        <div id="About_2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about-item-text-center">
                                <i class="fa fa-book"></i>
                                <h3>Our Team</h3>
                                <hr>
                                <h5>Our Front-End Developers</h5>
                                <ul>
                                    <li>Taranpreet Kaur</li>
                                    <li>Shiwani Chauhan</li>
                                    <li>Abhay Chauhan</li>
                                </ul>
                                <h5>Our Back-End Developers</h5>
                                <ul>
                                    <li>Vinay Kumar</li>
                                    <li>Lokesh Tanwar</li>
                                    <li>Ayush Sharma</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="about-item-text-center">
                                <i class="fa fa-globe"></i>
                                <h3>Our Vision</h3>
                                <hr>
                                <p>To acquire and maintain a global leadership position in choosen areas of businesses.<br>To continuously create new oppurtunities for growth.<br>To be among the top 10 most admired companies.<br>To continuously achieve a return on invested capital of at least 10 points higher than the cost of capital.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="about-item-text-center">
                                <i class="fa fa-book"></i>
                                <h3>Our Mission</h3>
                                <hr>
                                <p>Our mission is to offer you the creative arts education that is comprehensive.<br>And provide you a competitive task regarding your Knowledge and Experience.<br>Our mission is to provide you a better quiz task.We seek to prove our inventive spirit with every project.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="about-item-text-center">
                                <i class="fa fa-pencil"></i>
                                <h3>Our Values</h3>
                                <hr>
                                <h5>Core Values</h5>
                                <ul>
                                    <li>Integrity</li>
                                    <li>Quality</li>
                                    <li>Reliability</li>
                                    <li>Teamwork</li>
                                    <li>Trust</li>
                                    <li>Knowledge</li>
                                    <li>Honest</li>
                                    <li>Fair</li>
                                    <p>Whatever we do, we do it right.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
         <footer class="text-center text-white mt-4">
    <div class="text-center p-3" style="background-color: #021b42">
      © 2022 Copyright:
      <a class="text-white" href="#">Quiz.com</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    
</body>
</html>