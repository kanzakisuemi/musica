<?php include '../inc/header.php'; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM aboutmusic"); ?>
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
      <?php while($row = mysqli_fetch_array($result)): ?>
        <tr>
          <td><?= $row['song_name']; ?></td>
          <td><?= $row['artist_name']; ?></td>
          <td><?= $row['recommendation']; ?></td>
          <td><?= $row['users_name']; ?></td>
          <td><?= $row['users_age']; ?></td>
          <td><a class="btn btn-warning" href="/musicproject/pages/edit.php?id=<?= $row['song_id'] ?>">Edit</a></td>
          <td><a class="btn btn-danger" href="/musicproject/pages/delete.php?id=<?= $row['song_id'] ?>" onclick="confirm('Are u sure about deleting it?')">Delete</a></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<?php include '../inc/footer.php'; ?>
