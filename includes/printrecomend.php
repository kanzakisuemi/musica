<?php 
	include 'open_dbconn.php';
	include 'header.php'; 
	$sql = "SELECT * FROM aboutmusic";
	$result = mysqli_query($conn, $sql);
?> 

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
<?php
	include 'footer.php';
	include 'close_dbconn.php';
?>