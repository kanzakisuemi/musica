<?php
  include 'includes/open_dbconn.php';

  $song_name = $artist_name = $recommendation = $users_name = $users_age = '';
  $errors = array('song_name' =>'' , 'artist_name' =>'' , 'recommendation' =>'' ,'users_name' =>'' ,'users_age' =>'');

  if(isset($_POST['submit'])) {

    if(empty($_POST['song_name'])){
      $errors['song_name'] = 'a song name is required' <br/>;
    } else {
      $song_name = $_POST['song_name'];
      if(!preg_match('/ˆ[a-zA-Z0-9/s]+*$/', $song_name));
    }

    if(empty($_POST['artist_name'])){
      $errors['artist_name'] = 'an artist name is required' <br/>;
    } else {
      $artist_name = $_POST['artist_name'];
      if(!preg_match('/ˆ[a-zA-Z0-9/s]+*$/', $artist_name));
    }

    if(empty($_POST['recommendation'])){
      $errors['recommendation'] = 'a song name is required' <br/>;
    } else {
      $recommendation = $_POST['recommendation'];
      if(!preg_match('/ˆ[a-zA-Z0-9/s]+*$/', $recommendation));
    }

    if(empty($_POST['users_name'])){
      $errors['users_name'] = 'a song name is required' <br/>;
    } else {
      $users_name = $_POST['users_name'];
      if(!preg_match('/ˆ[a-zA-Z0-9/s]+*$/', $users_name));
    }

    if(empty($_POST['users_age'])){
      $errors['users_age'] = 'a song name is required' <br/>;
    } else {
      $users_age = $_POST['users_age'];
      if(!preg_match('/ˆ[0-9]+*$/', $users_age));
    }
  }





if (array_filter($errors)) {
  // code...
} else {
  $song_name = mysqli_real_escape_string($conn, $_POST['song_name'])
  $artist_name = mysqli_real_escape_string($conn, $_POST['artist_name'])
  $recommendation = mysqli_real_escape_string($conn, $_POST['recommendation'])
  $users_name = mysqli_real_escape_string($conn, $_POST['users_name'])
  $users_age = mysqli_real_escape_string($conn, $_POST['users_age'])

  $sql = "INSERT into aboutmusic (song_name, artist_name, recommendation, users_name, users_age) VALUES ('$song_name', '$artist_name', '$recommendation', '$users_name', '$users_age')";

  if(mysqli_query($conn, $sql)){
    header('Location: index.php')

  } else echo 'query error' .mysqli_error($conn);



}
 


  include 'close_dbconn.php';
?>