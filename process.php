<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//check to see if the score is set

	if(!isset($_SESSION['score']) ){
		$_SESSION['score'] = 0;

	}

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

		//Get total amount of questions
		$query = "SELECT * FROM `questions`";
		//Get result
		$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		$total = $results->num_rows;



		// Get Correct choice

		$query = "SELECT * FROM `choices`
		WHERE question_number = $number and is_correct = 1";

		//get the result
		$result = $mysqli->query($query) or die($mysqli->error._LINE_);

		//Get row
		$row = $result->fetch_assoc();
		$correct_choice = $row['id'];

		//Compare
		if($correct_choice == $selected_choice){
			//Answer is correct
			$_SESSION['score']++;

		}
		if($number == $total){
			header("Location: final.php");
			exit();

		} else {
			header("Location: question.php?n=".$next);
		}

}