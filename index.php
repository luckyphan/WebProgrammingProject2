
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="jeopardy.css"/>
	<title>Web Programming | Project 2</title>
</head>
  <body>
	  <br>
<center><?php 
$counter=0;
$cookie = 0;
    if (!isset($_COOKIE[$counter]))
    {
        setcookie($counter, $cookie);
    }
  echo "<h2>Cash: $".$_COOKIE[$counter]."</h2";

	?></center>
<!--if theres no cookie, set to 0 set on first time playing game-->
	  <br><br>
		<table border="1">
		<tr>
	    <td class="category"> ANIMALS</td>
	    <td class="category"> SPORTS</td>
	    <td class="category"> FRUITS</td>
	    <td class="category"> MUSIC</td>
	    <td class="category"> MOVIES</td>
	    <td class="category"> US HISTORY</td>
		</tr>
		<tr>
			<td><a class="value" href="question1-1.php">$200</a></td>
	    <td><a class="value" href="question1-2.php">$200</a></td>
	    <td><a class="value" href="question1-3.php">$200</a></td>
	    <td><a class="value" href="question1-4.php">$200</a></td>
	    <td><a class="value" href="question1-5.php">$200</a></td>
	    <td><a class="value" href="question1-6.php">$200</a></td>
	  </tr>
		<tr>
		  <td><a class="value" href="question2-1.php">$400</a></td>
	    <td><a class="value" href="question2-2.php">$400</a></td>
	    <td><a class="value" href="question2-3.php">$400</a></td>
	    <td><a class="value" href="question2-4.php">$400</a></td>
	    <td><a class="value" href="question2-5.php">$400</a></td>
	    <td><a class="value" href="question2-6.php">$400</a></td>
	  </tr>
		<tr>
		  <td><a class="value" href="question3-1.php">$600</a></td>
	    <td><a class="value" href="question3-2.php">$600</a></td>
	    <td><a class="value" href="question3-3.php">$600</a></td>
	    <td><a class="value" href="question3-4.php">$600</a></td>
	    <td><a class="value" href="question3-5.php">$600</a></td>
	    <td><a class="value" href="question3-6.php">$600</a></td>
	  </tr>
		<tr>
		  <td><a class="value" href="question4-1.php">$800</a></td>
	    <td><a class="value" href="question4-2.php">$800</a></td>
	    <td><a class="value" href="question4-3.php">$800</a></td>
	    <td><a class="value" href="question4-4.php">$800</a></td>
	    <td><a class="value" href="question4-5.php">$800</a></td>
	    <td><a class="value" href="question4-6.php">$800</a></td>
	  </tr>
		<tr>
	  	<td><a class="value" href="question5-1.php">$1000</a></td>
	    <td><a class="value" href="question5-2.php">$1000</a></td>
	    <td><a class="value" href="question5-3.php">$1000</a></td>
	    <td><a class="value" href="question5-4.php">$1000</a></td>
	    <td><a class="value" href="question5-5.php">$1000</a></td>
	    <td><a class="value" href="question5-6.php">$1000</a></td>
	  </tr>
		</table>
	  <br>
	  <br>
        <a class="logout" href="logout.php">logout</a>
	</body>
</html>
