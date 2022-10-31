<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/frontpage2.css">
	<style>
	  .bd-placeholder-img {
	   font-size: 1.125rem;
	   text-anchor: middle;
	   -webkit-user-select: none;
	   -moz-user-select: none;
	   user-select: none;
	   }

	  @media (min-width: 768px) {
	   .bd-placeholder-img-lg {
	    font-size: 3.5rem;
	   }
	  }

	  .b-example-divider {
	   height: 3rem;
	   background-color: rgba(0, 0, 0, .1);
	   border: solid rgba(0, 0, 0, .15);
	   border-width: 1px 0;
	   box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	   }

	   .b-example-vr {
	    flex-shrink: 0;
	    width: 1.5rem;
	    height: 100vh;
	   }

	   .bi {
	    vertical-align: -.125em;
	    fill: currentColor;
	   }

	   .nav-scroller {
	    position: relative;
	    z-index: 2;
	    height: 2.75rem;
	    overflow-y: hidden;
       }

	   .nav-scroller .nav {
	    display: flex;
	    flex-wrap: nowrap;
	    padding-bottom: 1rem;
	    margin-top: -1px;
        overflow-x: auto;
	    text-align: center;
	    white-space: nowrap;
	    -webkit-overflow-scrolling: touch;
	   }
	</style>
  </head>
  <body>

  	  <?php
   include 'includes/connection.php'; 
  ?>

	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="#">Indie</a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	       <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav me-auto mb-2 mb-md-0">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="form.html">Form</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://www.youtube.com/">Youtube</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://open.spotify.com/">Spotify</a>
	          </li>
	        </ul>
	        <form class="d-flex" role="search">
	         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	         <button class="btn btn-outline-success" type="submit">Search</button>
	        </form>
	      </div>
	    </div>
	  </nav>
	</header>
    <br> 
    <form  style="margin: auto; width: 70%" method="post" action="includes/connection.php">
     <label for="song_name" class="form-label">Song</label>
     <input type="text" class="form-control" id="song_name" placeholder="Yellow" name="song_name" required><br>
     <label for="artist_name" class="form-label">Artist</label>
     <input type="text" class="form-control" id="recommendation" placeholder="Coldplay" name="artist_name" required><br>
     <label for="recommendation" class="form-label">Why are you recommending this song?</label>
     <textarea class="form-control" id="recommendation" rows="3" name="recommendation" required></textarea><br>
     <label for="users_name" class="form-label">Nickname</label>
     <input type="text" class="form-control" id="users_name" placeholder="Kanzaki_Julia" name="users_name" required><br>
     <label for="users_age" class="form-label">Age</label>
     <input type="text" class="form-control" id="users_age" placeholder="19" name="users_age" required><br>
     <input type="button" name="submit" value=" Submit " style="background-color: darkslateblue; border-radius: 7px; border-width: 1px; color: ivory;">
    </form>
  


    <footer class="container">
       <p class="float-end"><a href="#">Back to top</a></p>
       <p>&copy; 2017–2022 Company, Inc.</p>
    </footer>

    <script src="script/bootstrap.bundle.min.js"></script>

  </body>
</html>