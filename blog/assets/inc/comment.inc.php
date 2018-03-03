<?php
	$query = "SELECT name, comment FROM " . $table;
	$result = mysqli_query($mysqli, $query);
	$num_rows = mysqli_affected_rows($mysqli);

	if($result && $num_rows > 0){
		echo "<div id='comments-div'><table>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>" . 
				 $row["name"] . "</div></td><td>" .
				 $row["comment"]  . "</td></tr>";
		}
		echo "</table></div>";
	}
?>

<form id='comment-form'
	  method='post'>
	<label for='name'>Name:</label><br/>
	<input type='text'
		   name='name'
		   size='20'
		   maxlength='20'
		   placeholder="Enter a name"
		   required="required"/><br/>
	<label for='comment'>Comments:</label><br/>
	<textarea name='comment'
			  id='comment'
			  rows='10'
			  required='required'></textarea><br/>
	<input type='submit' value="Submit"/>
</form>