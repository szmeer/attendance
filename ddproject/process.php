<?php
session_start();
?>

<?php

$db = mysqli_connect("localhost","root","","ddproject");
$sql = "UPDATE student_record SET defaulter=1 WHERE defaulter=0";
mysqli_query($db,$sql);
header("Location: ./admin.php");
exit();

?>
