<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//check to see if the score is set

	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;

	}

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		echo $number.'<br />';
		echo $selected_choice;
}