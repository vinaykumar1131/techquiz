	<?php include 'conn.php'; ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
 if(isset($_POST['submit'])){
	//We need total question in process file too
    $n=$_POST['n'];
    $table=$_POST['tab'];


$num=$n+1;
	
	//We need to capture the question number from where form was submitted
	//Here we are storing the selected option by user
    $myq="SELECT * from  $table where uid=$n";
	$res=mysqli_query($con,$myq);
	$question = mysqli_fetch_assoc($res);

 	$selected_choice = $_POST['choice'];

	//What will be the next question number
	
	//Determine the correct choice for current question
	
	//Increase the score if selected choice is correct
 	 if($selected_choice === $question['ans']){
 	 	$_SESSION['score']++;
 	 }
		//Redirect to next question or final score page. 
 	 if($num== 11){
 	 	header("LOCATION:final.php?tab=$table");
 	 }else{
 	 	header("LOCATION:get.php?n=$num&tab=$table");
 	 }

 }



?>