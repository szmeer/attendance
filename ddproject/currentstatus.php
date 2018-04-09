<?php
session_start();
?>

<?php
    include 'basicheader.php';
?>

<div class="container">
    
        <div class="jumbotron">
          <h1 class="display-4">Current Status</h1>
          <hr class="my-4">

          <?php
        echo "<br>";
        echo "<table class='table table-striped'>";
        echo 
            "
            <thead class='thead-dark'>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>STATUS</th>
             </tr>
             </thead>
             ";
        $db = mysqli_connect("localhost","root","","ddproject");
        $sql = "SELECT * from student";
        $result2 = mysqli_query($db,$sql);
        while($row1 = mysqli_fetch_array($result2)){
                $sql = "SELECT * FROM ".$_SESSION['sub_assign']." WHERE id=".$row1['id']."";
                $result = mysqli_query($db,$sql);
                $count1 = mysqli_num_rows($result);
                if($count1 > 0){
                    $count2=0;
                    while($row=mysqli_fetch_array($result)){
                        if($row['attendance']==1)
                            $count2++;
                    }
                    $percentage = ($count2/$count1)*100;
                    echo "<tr>
                    <td>".$row1['id']."</td>
                    <td>".$row1['name']."</td>
                    <td>".$percentage."</td>
                    </tr>";
                }
                else{
                    break;
                }         
        }
        echo "</table>";
?>


        </div>

</div>




