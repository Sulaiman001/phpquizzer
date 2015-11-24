<?php include 'database.php'; ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	/*
	*	Get Question
	*/
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	
	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Question</title>
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
			<div class = "current">Question 1 of 5</div>
			<p class = "question">
				<?php echo $question['text']; ?>
			</p>
			<form method = "post" action = "process.php">
				<ul class = "choices">
				<?php while($row = $choices->fetch_assoc()) : ?>
					<li><input name = "choice" type = "radio" value = "<?php echo $row['id'] ?>"</li><?php echo $row['text'] ?></li>
					<?php endwhile; ?>
				</ul>
				<input type = "submit" value = "submit">
			</form>
		</div>
		
	</main>
	<footer>
		<div class = "container">
			Copywrite 2015
		</div>
	</body>
	</html>