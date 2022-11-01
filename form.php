<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
	<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage2.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/stylish.css">
  </head>
  <body>

   <?php

   include 'includes/navbar.html'

   ?>

    <br> 
    <form  style="margin: auto; width: 70%" method="post" action="includes/connect.php">
     <label for="song_name" class="form-label">Song</label>
     <input type="text" class="form-control" id="song_name" placeholder="Yellow" name="song_name" value="" required><br>
     <label for="artist_name" class="form-label">Artist</label>
     <input type="text" class="form-control" id="recommendation" placeholder="Coldplay" name="artist_name" value="" required><br>
     <label for="recommendation" class="form-label">Why are you recommending this song?</label>
     <textarea class="form-control" id="recommendation" rows="3" name="recommendation" value="" required></textarea><br>
     <label for="users_name" class="form-label">Nickname</label>
     <input type="text" class="form-control" id="users_name" placeholder="Kanzaki_Julia" name="users_name" value=""  required><br>
     <label for="users_age" class="form-label">Age</label>
     <input type="text" class="form-control" id="users_age" placeholder="19" name="users_age" value="" required><br>
     <input type="submit" name="submit" value=" Submit " style="background-color: darkslateblue; border-radius: 7px; border-width: 1px; color: ivory;">
    </form> <br/>
  


    <footer class="container">
       <p class="float-end"><a href="#">Back to top</a></p>
       <p>&copy; 2017–2022 Company, Inc.</p>
    </footer>

    <script src="script/bootstrap.bundle.min.js"></script>

  </body>
</html>