<?php

session_start();

if (isset($_POST['submit-log-in'])) {

  include_once 'dbcon.php';

  $uname = mysqli_real_escape_string($conn, $_POST['username']);
  $loginpwd = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($uname) || empty($loginpwd)) {

    header("Location: ../homepage.php?login=empty");
    exit();

  } else {

    $sql = "SELECT * FROM student WHERE username = '$uname';";
    $result = mysqli_query($conn, $sql);
    $resultno = mysqli_num_rows($result);
    if ($resultno < 1) {
      header("Location: ../homepage.php?login=nosuchuser");
      exit();

    } else {

      if ($row = mysqli_fetch_assoc($result)) {

        if ($loginpwd != $row['password']) {

          header("Location: ../homepage.php?login=wrongpassword");
          exit();

        } else {

          $_SESSION['username'] = $row['username'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['id'] = $row['id'];

          header("Location: ../viewattendance.php?login=success");
          exit();

        }

      }

    }

  }

} else {
  header("Location: ../homepage.php?login=error");
  exit();
}
