<?php
session_start();
//Making Connection to DB 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ddproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";




// lets try

$listofrollnos = $_POST['listofrollnos'];
$status = $_POST['status'];
$subject = $_SESSION['sub_assign'];
$date = $_POST['date'];
$rangeofrollnos = $_POST['rangeofrollnos'];

echo "$status <br>";
echo "$subject <br>";
echo "$date <br>";




// var_dump($listofrollnos);
// var_dump($array);
// echo $array[0];

if(!empty($listofrollnos))
{
    $array = explode(',', $listofrollnos);
    if($status === 'Present')
    $status = 1;
else
    $status = 0;

for ($x = 0; $x < sizeof($array); $x++) {
    echo $array[$x];
    echo "<br>";
    $sql = "INSERT INTO `student_record`(`id`, `subject`, `date`, `attendance`,`defaulter`) VALUES 
     ('$array[$x]','$subject','$date','$status','0');";
     if ($conn->query($sql) === TRUE) {
    header("Location: ./index.php?record=success");
} else {
        header("Location: ./index.php?record=failure");

}
 
} 
}
else if(!empty($rangeofrollnos))
{
    $array = explode('-', $rangeofrollnos);

    if($status === 'Present')
    $status = 1;
else
    $status = 0;

for ($x = $array[0]; $x <= $array[1]; $x++) {
    echo "<br>";
    $sql = "INSERT INTO `student_record`(`id`, `subject`, `date`, `attendance`,`defaulter`) VALUES
     ('$x','$subject','$date','$status','0');";
     
     if ($conn->query($sql) === TRUE) {
      header("Location: ./index.php?record=success");
        } 
    else {
        header("Location: ./index.php?record=failure");
        }

    } 
    

}


?>