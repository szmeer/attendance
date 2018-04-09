<?php

session_start();
include 'basicheader.php';

?>
<!-- 
<?php
echo "successfull login";
echo "  ".$_SESSION['name'];
?> -->

<head>
    <style type="text/css">
        .alert{
            font-size: 15px;
    font-weight: bold;
        }

        select{
                width: 100%;
    padding: 5px;
    font-size: 20px;
        }
    </style>
</head>

<div class="container">
    
<div class="jumbotron">
    

<div class="row">

        <div class="col-md-8">
            <h1 class="display-5 font-weight-bold">Hello, <?php echo $_SESSION['name']; ?></h1>
        </div>

         <div class="col-md-4">
             <div class="container text-right ">
                <form class="logout " action="./php/logout.php" method="POST">
                    <button type="submit" class="btn btn-danger btn-lg btn-block" name="logout">
                         Logout
                    </button>
                </form>
            </div>

        </div>
</div>

<hr>

  
  <form action="viewattendance.php" method="post">
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <label style="font-size: 25px;" for="Subject" class="font-weight-bold">Select Subject:</label>
        </div>
        <div class="col-md-6">
            <select name="subject" id="">
        <option value="dd">DD</option>
        <option value="spcc">SPCC</option>
        <option value="mcc">MCC</option>
        <option value="se">SE</option>
    </select> 
        </div>
        <div class="col-md-3">
            <button class="btn btn-success btn-block btn-lg" type="submit" name="submit">Search</button>
        </div>
    </div>



    
     
</div>
   
</form>

<?php

if(isset($_POST['submit'])){
    echo "<h1>Current Status</h1>";
    $db = mysqli_connect("localhost","root","","ddproject");
    $sql = "SELECT * FROM ".$_POST['subject']." WHERE id=".$_SESSION['id']."";
    $result = mysqli_query($db,$sql);
    $count1 = mysqli_num_rows($result);
    if($count1 >0){
        $count2=0;
    echo $_POST['subject'];
    echo "<br>";
    echo "<table class='table table-striped'>";
    echo "<tr><th>DATE</th><th>STATUS</th></tr>";

    while($row=mysqli_fetch_array($result)){
        if($row['attendance']==1)
            $count2++;
        echo "<tr>
        <td>".$row['date']."</td>
        <td>";
        if($row['attendance']==1)
            echo "present";
        else
            echo "absent";
        echo "</td></tr>";
    }
    echo "</table><br>";
    $percentage = ($count2/$count1)*100;
    if($percentage >=75){

        echo '<div class="alert alert-success" role="alert">';
             echo $percentage."%. You are safe";
            echo '</div>';   

       
    }
    else{
        
        echo '<div class="alert alert-danger" role="alert">';
            echo "Your Attendance is ".$percentage."%. Do sit lectures to avoid defaulter</h3><br>";
            echo '</div>';   
    }
    }
    else{
        echo "<br>no new attendance marked<br>";
    }
    


    echo "<h1>Previous defaulter</h1>";
    $sql = "SELECT * FROM student_record WHERE id=".$_SESSION['id']." AND subject='{$_POST['subject']}' AND defaulter=1";
    $result = mysqli_query($db,$sql);
    $count1 = mysqli_num_rows($result);
    $count2 = 0;
    if($count1>0){
        echo $_POST['subject'];
        echo "<br>";
        echo "<table class='table table-striped'>";
        echo "<tr><th>DATE</th><th>STATUS</th></tr>";
        while($row=mysqli_fetch_array($result)){
            if($row['attendance']==1)
                $count2++;
            echo "<tr>
            <td>".$row['date']."</td>
            <td>";
            if($row['attendance']==1)
                echo "present";
            else
                echo "absent";
            echo "</td></tr>";
        }
        echo "</table><br>";
        $percentage = ($count2/$count1)*100;
        if($percentage >=75){
            echo $percentage."    <br>You are safe";
        }
        else{
            echo $percentage."    <br>you are in defaulter";
        } 
    }
    else{
        echo "  <br>no defaulter list yet   ";
    }
}


?>



</div>
</div> <!--End of container-->




