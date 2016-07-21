<?php 
	session_start();
	if(isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$new_student = array(
			'id' => $id,
			'name' => $name
			);
		$_SESSION['name'] = $name;
		$_SESSION['student'][] = $new_student;
		header("Location: 09_result.php");
	}

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$name = $_GET['name'];
		echo "Id bang $id"."<br>";
		echo "ten bang $name";
	}
?>