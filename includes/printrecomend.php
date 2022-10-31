<?php 

// Include connection file  
include 'open_dbconn.php';
 
//Select query 
$select = "SELECT * FROM about music";
$result = $conn->query($select);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Song recommendation</title> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head> 
<body> 
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
			// Loop the music data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td>'.$row->song_name.'</td>'
						.'<td>'.$row->artist_name.'</td>'
						.'<td>'.$row->recommendation.'</td>'
						.'<td>'.$row->users_name.'</td>'
						.'<td>'.$row->users_age.'</td>'
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
</body> 
</html> 