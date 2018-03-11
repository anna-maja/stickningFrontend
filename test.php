<!DOCTYPE html>
<html>
	<body>

		<p>Välj mottagare</p>

		<select id="mottagareID" onchange="myFunction()">
			<?php

			$sql = "SELECT DISTINCT * FROM mottagare";
			$table = mysqli_query($connection, $sql); 

			while ($row = $table->fetch_assoc()) { 
				$namn = $row["namn"];
				$id = $row["ID"];
				echo '<OPTION value="' . $id . '">' . $namn . '</OPTION>'; 
			} 
			?>

		</select>

		<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

		<p id="demo"></p>

		<script>
		function myFunction() {
			var x = document.getElementById("mottagareID").value;
			document.getElementById("demo").innerHTML = "You selected: " + x;
		}
		</script>

	</body>
</html>
