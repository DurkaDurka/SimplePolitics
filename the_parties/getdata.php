<?php
include("../../mysqli.php");

$src = $_GET['src'];

$sql = "select * from politicians where src = '$src'";
$result = $conn->query($sql);

if($row = $result->fetch_assoc()) {
	echo "<form id='form' action='' method='post'>
			<table id='table'>
				<tbody>
					<tr><td><input type='hidden' id='hidden' name='src' value='" . $row['src'] . "'<br><br></td></tr>
					<tr><td class='favour'>Name:</td> <td class='fortune'><input type='text' id='name' name='name' value='" . $row['name'] . "'><br><br></td></tr>
					<tr><td class='favour'>Age:</td> <td class='fortune'><input type='text' id='age' name='age' value='" . $row['age'] . "'><br><br></td></tr>
					<tr><td class='favour'>Education:</td> <td class='fortune'><input type='text' id='education' name='education' value='" . $row['education'] . "'><br><br></td></tr>
					<tr><td class='favour'>Salary:</td> <td class='fortune'><input type='text' id='salary' name='salary' value='" . $row['salary'] . "'><br><br></td></tr>
					<tr><td class='favour'>Traits:</td> <td class='fortune'><input type='text' id='traits' name='traits' value='" . $row['traits'] . "'><br><br></td></tr>
				</tbody>
			</table>
		  </form> 
		  <br><br>
			<input type='button' id='button' name='submit' value='Update'><br><br><br><div id='updated'></div>";
			//http://localhost/~lukewilson/simplepolitics/postdata.php
} else {
	echo "No results returned <input class='hidden' type='button' id='button' name='submit'>"; // Hidden button so that parties_ecma does not fail.
}

$conn->close(); 

?>
