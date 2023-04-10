<?php
  include 'open_dbconn.php';
  $sql = "INSERT INTO aboutmusic (song_name, artist_name, recommendation, users_name, users_age) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssi", $song_name, $artist_name, $recommendation, $users_name, $users_age);

  $song_name = $_POST["song_name"];
  $artist_name = $_POST["artist_name"];
  $recommendation = $_POST["recommendation"];
  $users_name = $_POST["users_name"];
  $users_age = $_POST["users_age"]; 

  if(mysqli_execute($stmt)):
    echo 
    "<script type:javascript>
      alert('Submitted Sucessfully!')
      window.location.href = 'http://localhost:8080/musicproject/pages/printrecomend.php'
    </script>";
  endif;

  $stmt->close();
  include 'close_dbconn.php';
?>
