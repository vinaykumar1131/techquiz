<?php
include 'conn.php';
session_start();
//Set Question Number
$n = $_GET['n'];
$tab = $_GET['tab'];

$query = "SELECT * FROM $tab WHERE `uid` = $n";
$result = mysqli_query($con, $query);
$question = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url("images/back.jpg");
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.6);
    background-blend-mode: darken;
            background-size: cover;
            color: white;
        }

        .inner {
            padding: 1rem;
            background-color: white;
            width: 75%;
            margin: auto;
            margin-top: 3rem;

            color: #1f83ff;
            border-radius: 30px;
        }

        .btn {
            width: 16%;

        }

        ol li {
            font-size: 25px;
            font-weight: 400;
            margin-left: 1rem;
            list-style-type: none;
            background-color: darkgray;
            margin-bottom: 12px;
            display: flex;
            flex-direction: row;
            color: white;
            margin-top: 4px;
        }
        ol li:hover{
            background-color: green;

        }
        h4{
            background-color: black;
            color: white;
            font-weight: 400;
            padding: 12px;
        }
        li label{
            width: 60%;
            margin-left: 12px;
            margin-top: 5px;
            font-weight: 600;

        }
        h1{
            color: black;
        }
    </style>
</head>

<body>
    <div class="containr-fluid">
        <div class="inner">
            <center>
                <h1>QUESTIONS</h1>
            </center>
            <hr>
            <form action="pro.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h4><?php echo $question['question'] ?></h4>
                    </div>
                    <ol>
                    <div class="col-md-12">
                    <li><input type="radio" id="1" name="choice" value="<?php echo $question['op1'] ?>" required="required"><label for="1"><?php echo $question['op1'] ?></label></li>
                    </div>
                    <div class="col-md-12">
                    <li><input type="radio" id="2" name="choice" value="<?php echo $question['op2'] ?>"><label for="2"><?php echo $question['op2'] ?></label></li>

                    </div>
                    <div class="col-md-12">
                    <li><input type="radio" id="3" name="choice" value="<?php echo $question['op3'] ?>"><label for="3"><?php echo $question['op3'] ?></label></li> 
                    </div>
                    <div class="col-md-12">
                    <li><input type="radio" id="4" name="choice" value="<?php echo $question['op4'] ?>"><label for="4"><?php echo $question['op4'] ?></label></li>
                    </div>
                    </ol> 
                </div>
                <div class="col-md-12">
                <center><input type="submit" class="btn btn-large btn-dark" name="submit" value="NEXT"></center>
                </div>
                <input type="hidden" name="n" value="<?php echo $n ?>">
                <input type="hidden" name="tab" value="<?php echo $tab ?>">

            </div>
            </form>
            
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>