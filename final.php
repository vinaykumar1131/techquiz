<?php 
$table=$_GET['tab'];
session_start();
$msg="";
@$num=$_SESSION['score'];
if($num>=0 && $num<=3){
	$msg="You need  to learn More";
}
else if($num>=4&&$num<=7){
	$msg="Improve your Self";
}
else{
	$mg="Good";
}
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/93b52369a3.js" crossorigin="anonymous"></script>
    <title>Document</title>
	<title>Result Page</title>
	<style>
		#cl{
			height: 400px;
			width: 70%;
			background-color: lightgray;
			margin-top: 150px;
			text-align: center;
		}
		a{
			text-decoration: none;
			font-size: 20px;
			color: white;
		}
		.head h2{
			font-size: 30px;
			font-weight: 600;
			margin-top: 30px;

		}
		header h2{
			font-size: 30px;
			font-weight: 400;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin-top: 40px;
		}
		button{
			margin-top: 30px;
		}
		.head p{
			font-size: 25px;
		}
	</style>
</head>
<body>
<div id="cl" class="container">
	<header>
		<div>
			<h2>You Given a <?php echo @$table?> Quiz</h2>
		</div>
	</header>

	<main>
			<div class="head">
				<h2>Your Quiz Result</h2>
				<p>Congratulation <?php echo @$_SESSION['username']?> You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo @$_SESSION['score']; ?> out of 10</p>
				<p><?php echo $msg?></p>
				
			</div>

	</main>


<button class="btn btn-dark"><a href="home.php">Back to Home</a></button>

	</div>





</body>
</html>