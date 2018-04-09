<?php
if (isset($_POST['logout'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../homepage.php");
  exit();
} else {
  header("Location: ../homepage.php");
  exit();
}
