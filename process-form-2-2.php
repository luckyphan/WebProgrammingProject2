<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="process-form-style.css"/>
    <meta charset="UTF-8">
    <title>Processed Form</title>
</head>
<body>
    <div class="process-form-styling">
        <center><h1><b><em>Your Answer:</em> <u><?php echo $_POST["input"]?></u></b></h1></center>
        <center><h1><b><em>Our Answer:</em> <u>Pivot</u></b></h1></center>

        <center><h2><b><?php
		$counter=0;
		$cookie=0;
          $ans = "Pivot";
          $ans1 = $_POST["input"];
          if (strcasecmp($ans, $ans1) == 0) {
              echo 'Correct. You win $400!';
			  $cookie = $_COOKIE[$counter]+400;
        setcookie($counter, $cookie);
          } else {
            echo 'Incorrect. You lose $400!';
			  $cookie = $_COOKIE[$counter]-400;
        setcookie($counter, $cookie);
          }
        ?></b></h2></center>
        <center><a href="question2-2.php" class="button">BACK TO QUESTION</a></center>
        <br>
        <br>
        <center><a href="index.php" class="button">BACK TO BOARD</a></center>
    </div>
</body>
</html>
