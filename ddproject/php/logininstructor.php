<?php

session_start();

if (isset($_POST['submit-log-in'])) {

  include_once 'dbcon.php';

  $uname = mysqli_real_escape_string($conn, $_POST['username']);
  $loginpwd = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($uname) || empty($loginpwd)) {

    header("Location: ../index.php?login=empty");
    exit();

  } else {

    $sql = "SELECT * FROM instructor WHERE username = '$uname';";
    $result = mysqli_query($conn, $sql);
    $resultno = mysqli_num_rows($result);
    if ($resultno < 1) {
      header("Location: ../index.php?login=nosuchuser");
      exit();

    } else {

      if ($row = mysqli_fetch_assoc($result)) {

        if ($loginpwd != $row['password']) {

          header("Location: ../index.php?login=wrongpassword");
          exit();

        } else {
          if($row['username']==="admin123"){
            header("Location: ../admin.php?login=success");
            exit();
          }
          $_SESSION['username'] = $row['username'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['sub_assign'] = $row['sub_assign'];

          header("Location: ../MarkAttendance/index.php?login=success&record=norecords");
          exit();

        }

      }

    }

  }

} else {
  header("Location: ../index.php?login=error");
  exit();
}
