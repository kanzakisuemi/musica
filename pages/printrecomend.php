<?php include '../inc/header.php'; ?>
<div class="container p-5">
	<table class="table table-bordered">
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
			<?php  $sql = "SELECT * FROM aboutmusic";
				$result = mysqli_query($conn, $sql);
				while($row = $result->fetch_object()):
			?>
				<tr>
					<td><?= $row->song_name; ?></td>
					<td><?= $row->artist_name; ?></td>
					<td><?= $row->recommendation; ?></td>
					<td><?= $row->users_name; ?></td>
					<td><?= $row->users_age; ?></td>
				</tr>
				<?php endwhile; ?>
		</tbody>
  </table>
</div>
<?php include '../inc/footer.php'; ?>
