<?php
session_start();
?>

<?php

$db = mysqli_connect("localhost","root","","ddproject");
$sql = "DELETE FROM student_record where defaulter=1";
mysqli_query($db,$sql);
header("Location: ./admin.php");
exit();

?>