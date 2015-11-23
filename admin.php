<!DOCTYPE html>
<html>
<head>
	<title>Admin - Add/Delete Questions</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class = "container">
			<h1>PHP Quizzer</h1>
		</div>

	</header>
	<main>
		<div class = "container">
			<h2>Add a Question</h2>
			<form method = "post" action="add.php">
				<p>					
					<label>Question Number</label>
					<input type = "number" name = "question_number"/>
				</p>
				<p>					
					<label>Question Text</label>
					<input type = "text" name = "question_text"/>
				</p>
				<p>					
					<label>Choice #1</label>
					<input type = "text" name = "choice1"/>
				</p>
				<p>					
					<label>Choice #2</label>
					<input type = "text" name = "choice2"/>
				</p>
				<p>					
					<label>Choice #3</label>
					<input type = "text" name = "choice3"/>
				</p>
				<p>					
					<label>Choice #4</label>
					<input type = "text" name = "choice4"/>
				</p>
				<p>					
					<label>Choice #5</label>
					<input type = "text" name = "choice4"/>
				</p>
				<p>					
					<label>Correct choice #</label>
					<input type = "number" name = "correct_choice"/>
				</p>
				<input type = "submit" value = "Add Question" class = ""
			</form>
		
	</main>
	<footer>
		<div class = "container">
			Copywrite 2015
		</div>
	</body>
	</html>