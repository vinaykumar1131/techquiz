<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $name=$_POST['name'];

    $msg=$_POST['message'];

    $que="insert into query (email,name,message) values ('$email','$name','$msg')";
    mysqli_query($con,$que);
    header('location:home.php');


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us and giev feedback</title>
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet">

  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
    rel="stylesheet">
    
    <style>
        body
            {
                background:rgb(218, 213, 213);        
            }
        
        .container
            {
                
                background:linear-gradient(to right, #021b42, #f57435 100%);
                opacity: 0.8;
                /* box-shadow: 0 5px 30px rgb(244, 206, 148); */
                
            }
        .btn-blue
            {
                background-color:#008CBA;
                font-size: 20px;
            }
    </style>
    
</head>
<body>
    <div class="bg-image">
    <!--Section: Contact v.2-->
    <section class="mb-4 container">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-light">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 text-light">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" required>
                            <label for="name" class="text-light">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" required>
                            <label for="email" class="text-light">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" required></textarea>
                            <label for="message" class="text-light">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <input class="btn btn-primary" type="submit" value="submit" name="submit">

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x text-light"></i>
                    <p class="text-light">YAMUNANAGAR, jagadhri, INDIA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x text-light"></i>
                    <p class="text-light">+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x text-light"></i>
                    <p class="text-light">onlinequiz123@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
</div>
<!--Section: Contact v.2-->
</body>
</html>