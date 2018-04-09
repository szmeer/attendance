<?php

session_start();



 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		a {
			text-decoration: none;
			color: white;
		}
		a:hover{
			text-decoration: none;
			color: white;
		}
		.row{
			margin-top: -50px;
		}
	</style>
</head>
<body>

<div class="container">

	<div class="jumbotron">
		


	<div class="row">
		<div class="col-md-4">
			<a href="../currentstatus.php"><button class="btn btn-block btn-success btn-lg">Current Status</button></a>
		</div>
		<div class="col-md-4">
			<a href="../afterdefaulter.php"><button class="btn btn-block btn-primary btn-lg">View Defaulters</button></a>	
		</div>
		<div class="col-md-4">
			<a href="../php/logout.php"><button class="btn btn-block btn-danger btn-lg">Logout</button></a>
		</div>
	</div>
  <h1 class="display-4 mt-5">Welcome, <?php echo $_SESSION['name'];?> </h1>
  <hr>
  <form action="insert.php" method="POST">
		
	<div class="container">
		<div class="form-group">
    		<label class="font-weight-bold">Enter Roll nos to be marked absent/present</label>
    		<input type="text" name="listofrollnos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"  placeholder="Seperate Roll nos with commas eg: 34,56,78">
  		</div>
	</div>
	<h3 class="text-center">OR</h3>
	<div class="container">
		<div class="form-group">
    		<label class="font-weight-bold">Define a range of rollnos to be marked present/absent</label>
    		<input type="text" name="rangeofrollnos" class="form-control" id="exampleInputEmail1"  autocomplete="off" aria-describedby="emailHelp" placeholder="eg: 55-67">
  		</div>
	</div>



<div class="container">
		<div class="form-group">
    		<!-- <label class="font-weight-bold" for="subjects">Select Subject</label>
    			<select name="subject" class="form-control" id="selectPresentAbsent">
      				<option>SE</option>
      				<option>DD</option>
      				<option>MCC</option>
      				<option>SPCC</option>
    			</select> -->
    			<label for="Subject" class="font-weight-bold">Subject</label>
    			<input type="text" name="subject" disabled placeholder="<?php echo $_SESSION['sub_assign'];?>">
  		</div>
</div>

<div class="container">
		<div class="form-group">
    		<label class="font-weight-bold" for="date">Date</label>
    			<input type="date" name="date" value="<?php echo (new \DateTime())->format('Y-m-d'); ?>"  max="<?php echo (new \DateTime())->format('Y-m-d'); ?>" required>
  		</div>
</div>
		



	<div class="container">
		<div class="form-group">
    		<label class="font-weight-bold" for="selectoption">Present/Absent</label>
			    <select name="status" class="form-control" id="selectPresentAbsent">
				      <option>Present</option>
				      <option>Absent</option>
			    </select>
  		</div>

  		<div class="row mt-4">
  			<div class="col-md-3">
  				<button type="submit" class="btn btn-dark btn-lg">Mark Attendance</button>
  			</div>
  			<div class="col-md-9">
  				<?php
if($_GET['record']==='success')
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Records Inserted Succcessfully </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


';
else if($_GET['record']==='norecords')
echo "";
?>
  			</div>
  		</div>

		
		
	</div>



</form>
</div>
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


