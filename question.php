<?php include 'database.php'; ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];
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
				What does php stand for?
			</p>
			<form method = "post" action = "process.php">
				<ul class = "choices">
					<li><input name = "choice" type = "radio" value = "1"</li>PHP: Hypertext Preprocessor</li>
					<li><input name = "choice" type = "radio" value = "1"</li>PHP: Hypertext Preprocessor</li>
					<li><input name = "choice" type = "radio" value = "1"</li>PHP: Hypertext Preprocessor</li>
					<li><input name = "choice" type = "radio" value = "1"</li>PHP: Hypertext Preprocessor</li>

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