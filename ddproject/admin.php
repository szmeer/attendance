
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top:10%;">

<div class="jumbotron text-center">
	<div class="row">
	<div class="col-md-8">
	<h1 class="display-4 text-center font-weight-bold">Welcome to Admin Site</h1>
	</div>

	<div class="col-md-4 mt-3">
	<form action="./php/logout.php">
			<button class="btn btn-danger btn-lg" >Logout</button>
		</form>
	
	</div>

	</div>


  
  <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p> -->
  <div class="container text-center">
		<div class="form-group">

		<div class="row mt-5">
			<div class="col-md-6">
			<form action="process.php" action="post">
			<button class="btn btn-success btn-block" type="submit">Release Defaulters</button>		
			</form>
			</div>
			<div class="col-md-6">
			<form action="clear.php" action="post">
			<button class="btn btn-danger btn-block"   type="submit">Clear Attendance</button>
		</form>
			</div>

		</div>

		
		
  		</div>
	</div>
</div>

	</div>

	<div>
		
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


