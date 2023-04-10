<?php
  header('location:http://localhost:8080/musicproject/pages/editpage.php');
  include '../inc/open_dbconn.php'; 
?>
<?php 
  $id = $_GET['song_id'];
  $stmt = $conn->prepare("DELETE FROM aboutmusic WHERE song_id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();
?>
<?php include '../inc/close_dbconn.php'; ?>

