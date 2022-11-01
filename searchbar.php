<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>search</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage2.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/stylish.css">
</head>
<body>

   <?php

   include 'includes/navbar.html';

	include 'includes/open_dbconn.php';
	
   ?>
	<br/>

<div class="container">
	<table class="table">
		<thead class="thead-light">
			<tr>
			  <th scope="col">Song</th>
			  <th scope="col">Artist</th>
			  <th scope="col">Thoughts</th>
			  <th scope="col">Nickname</th>
			  <th scope="col">Age</th>
			</tr>
		</thead>
		<tbody>
   	
    	<?php
    	if (isset($_POST['submit_search'])){
    		$search = mysqli_real_escape_string($conn, $_POST['search']);
    		$sql = "SELECT * FROM aboutmusic WHERE song_name LIKE '%$search%' OR artist_name LIKE '%$search%' OR recommendation LIKE '%$search%' OR users_name LIKE '%$search%' OR users_age LIKE '%$search%'";
    		$result = mysqli_query($conn, $sql);
    		$queryResult = mysqli_num_rows($result);

    		if ($queryResult == 1){
    			echo "There is " .$queryResult. " result!";
    		} elseif ($queryResult > 1){
    			echo "There are " .$queryResult. " results!";
    		}
    		echo '<table class="table table-bordered">';

    		if ($queryResult > 0){
    			while ($row = mysqli_fetch_assoc($result)) { 
    				echo "<tr>
						<td>".$row['song_name']."</td>
						<td>".$row['artist_name']."</td>
						<td>".$row['recommendation']."</td>
						<td>".$row['users_name']."</td>
						<td>".$row['users_age']."</td>
						</tr>";     				
    			}
    		} else {
    			echo "There are no results matching your search!";
    			}
    	}

    	?>
   	</tbody>
   </table>
</div>
</body> 
</html> 
<?php

include 'includes/close_dbconn.php';

?>