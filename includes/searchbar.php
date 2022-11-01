<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>search</title>

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

    include 'includes/navbar.html';

	include 'includes/open_dbconn.php';
	

	$busca = $_GET['pesquisa'];
	$sql = "SELECT * FROM aboutmusic WHERE nome LIKE '%" . $busca . "%';";
	$result = mysqli_query($conn,$sql); 


	?>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
 

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
                         
                    
           <?php foreach($result as $line){ 
                   $song_id = $line['id'];
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
<?php

include 'close_dbconn.php'

?>