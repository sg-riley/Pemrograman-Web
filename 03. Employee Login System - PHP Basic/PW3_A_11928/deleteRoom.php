<?php
session_start();

if (isset($_POST["room_id"])) {
  $room_id = $_POST["room_id"];
  unset($_SESSION["room_list"][$room_id]);
  $_SESSION["hapus"] += 1;
  header("Location: dashboard.php");
  exit;
}
?>