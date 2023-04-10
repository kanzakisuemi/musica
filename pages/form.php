<?php include '../inc/header.php'; ?>
<div class="p-4 row">
  <div class="col"></div>
  <div class="col-5">
    <form method="post" action="../inc/connect.php" name="form">
      <div class="mb-3">
        <label for="song_name" class="form-label">Song</label>
        <input type="text" class="form-control" id="song_name" placeholder="Yellow" name="song_name" value="" required>
      </div>
      <div class="mb-3">
        <label for="artist_name" class="form-label">Artist</label>
        <input type="text" class="form-control" id="recommendation" placeholder="Coldplay" name="artist_name" value="" required>
      </div>
      <div class="mb-3">
        <label for="recommendation" class="form-label">Why are you recommending this song?</label>
        <textarea class="form-control" id="recommendation" rows="3" name="recommendation" value="" required></textarea>
      </div>
      <div class="mb-3">
        <label for="users_name" class="form-label">Nickname</label>
        <input type="text" class="form-control" id="users_name" placeholder="Kanzaki_Julia" name="users_name" value="" required>
      </div>
      <div class="mb-3">
        <label for="users_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="users_age" placeholder="19" name="users_age" value="" required>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-info">Submit</button> 
      </div>
    </form>
  </div>
  <div class="col"></div>
</div>
<?php include '../inc/footer.php'; ?>
