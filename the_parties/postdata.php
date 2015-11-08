<!Doctype html>
<html>
<head>

</head>

<body>
<?php
include("../../mysqli.php");

	//Disassemble variables
	$src = $_POST["src"];
	$name = $_POST["name"];
	$name = strip_tags($name);
	$age = intval($_POST["age"]);
	$age = strip_tags($age);
	$education = $_POST["education"];
	$education = strip_tags($education);
	$salary = $_POST["salary"];
	$salary = strip_tags($salary);
	$traits = $_POST["traits"];
	$traits = strip_tags($traits);

	$query = "update politicians set name = '$name', age = '$age', education = '$education', salary = '$salary', traits = '$traits' where src = '$src'";

	if($conn->query($query) === TRUE) {
		echo "Record Updated Successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
	$conn->close();

?>
</body>
</html>