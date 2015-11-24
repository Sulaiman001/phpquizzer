<?php include 'database.php'; ?>
<?php
	//get the total numer of questions
	$query = "SELECT * FROM `questions`";
			
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	//sum total number of rows
	$total = $result->num_rows;

	//output number of estimated minutes quiz will take assuming each
	//question takes 30 seconds

	$estimated_time = ($total * 30) / 60;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class = "container">
		<h1>Quizzer</h1>
		</div>

	</header>
	<main>
	<div class = "container">
		<h2>Test Your PHP Knowledge</h2>
		<p>This is a multiple choice quiz to test your knowledge of php</p>
		<ul>
			<li>
				<strong>Number of Questions: <?php echo $total ?></strong>
			</li>
			<li>
				<strong>Type: Multiple Choice </strong>
			</li>
			<li>
				<strong>Estimated Time: <?php echo $estimated_time.' minutes' ?></strong>
			</li>
		</ul>
		<a href = "question.php?n=1" class = "start">Start</a>
	</div>
		
	</main>
	<footer>
		<div class = "container">
		Copywrite 2015
		</div>
</body>
</html>