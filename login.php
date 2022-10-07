<?php
   session_start();
    $exists="";
        
    if (isset($_POST['done'])) {
          
        // Include file which makes the
        // Database Connection.
        include 'conn.php';   
        
        $pass=$_POST['pass'];
       $email = $_POST['email'];
       $checkemail = "SELECT * FROM signin WHERE email = '$email' && PASS='$pass'";
       $run_check = mysqli_query($con, $checkemail) or die(mysqli_error($con));
       $rr= mysqli_num_rows($run_check);
  
        
        
        
        if($rr==0){     
          $exists="please Enter a valid Email and Pass"; 
        }
else 
       {
          $resc=mysqli_fetch_assoc($run_check);
          $_SESSION['username']=$resc['Fname'];
        ?>
                <script>
                    alert("Login Succesfully");
                </script>
            <?php
    header('location:Home.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Bootstrap Sign up Form with Icons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
    <style>
       .signup-form
            {
                background-image:url("study.jpg" );
    background-size: 100% ;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    background-blend-mode: darken;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 640px;
            }
            form{
                margin-top: 50px;
                border: 2px solid black;
            }
     
        .signup-form form 
            {
	            color: #999;
	            border-radius: 3px;
	            margin-bottom: 15px;
	            background: #fff;
	            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	            padding: 30px;
            }
        .signup-form h2
            {
                color: #333;
	            font-weight: bold;
                margin-left: 33%;
	            /* margin-top: 0; */
            }
        .signup-form hr
            {
                /* background-color:purple; */
                box-shadow: 0px 2px 2px rgba(80, 5, 105, 0.3);

            }
        .signup-form .btn
            {
                margin-left: 33%;
            }
            h4{
                color: red;
                font-size: 20px;
                position: relative;
            }
    </style>
</head>
<body>
<div id="vs" class="signup-form">
    <h4><?php echo $exists  ?></h4>
        <form action="" method="post">
        <h2>login Up</h2>
        <hr>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-user"></span>
                    </div>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
            </div>
        </div>

        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="pass" placeholder="Enter password" required="required">
			</div>
        </div>

       

		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" value="done" name="done">login</button>
        </div>
        </form>
	    <div class="text-center" style="color: white ">if you are new then please signup <a href="signup.php">Signup here</a></div>
    </div>
</body>
</html>