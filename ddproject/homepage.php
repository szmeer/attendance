<?php
session_start();
?>

<?php include 'basicheader.php';?>

<!-- Editing::: Pratik -->
<!--Adding Jumbotron-->
<div class="container" style="margin-top:3%;">
  <div class="jumbotron align-middle">
    <h1 class="display-4 font-weight-bold text-center">Attendance Management System</h1>
    <p class="lead font-weight-normal text-center">A Portal for Teachers and Students to maintain their daily attendance record</p>
    <hr class="my-4">
    <div class="container display-card">
      <div class="row">
        <div class="col-md-6">
          <div id="instructor-card" class="card" style="width: 100%;">
            <img  style="margin: 0 auto; margin-top: 20px;" class="card-img-top" src="teacher.png" alt="Card image cap">
            <div class="card-body">
              <button class="btn btn-primary btn-block font-weight-bold" style="font-size:24px;" onclick="changeCard('instructor-card','instructor-login')">Instructor Login</button>
            </div>
          </div>
           <div id="instructor-login" class="card" style="width:100%; display: none;">
            <div class="card-body">
              <form action="php/logininstructor.php" method="post">
                  <div class="form-group">
                    <h1>For Instructors  <span><i style="font-size: 35px; cursor: pointer;" class="material-icons" onclick="changeCard('instructor-login','instructor-card')">cancel</i></span></h1>

                    <label><h4>Username</h4></label>
                    <input type="" class="form-control" autocomplete="off" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"><h4>Password</h4></label>
                    <input type="password" autocomplete="off" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block font-weight-bold" style="font-size:24px;" name="submit-log-in">Submit</button>
                </form>

            </div>
          </div>


          
        </div>
        <div class="col-md-6">
          <div id="student-card" class="card" style="width: 100%;">
            <img  style="margin: 0 auto; margin-top: 20px;"class="card-img-top" src="student.png" alt="Card image cap">
            <div class="card-body">
              <button class="btn btn-primary btn-block font-weight-bold" style="font-size:24px;" onclick="changeCard('student-card','student-login')">
              Student Login</button>

            </div>
          </div>
          <div id="student-login" class="card" style="width:100%;height: 362px !important;display: none;">
            <div class="card-body">
              <form action="php/loginstudent.php" method="post">
                <div class="form-group">
                  <h1>For Students<span><i style="font-size: 35px; cursor: pointer" class="material-icons" onclick="changeCard('student-login','student-card')">cancel</i></span></h1>
                  <label><h4>Username</h4></label>
                  <input type="" autocomplete="off" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><h4>Password</h4></label>
                  <input type="password" autocomplete="off" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block font-weight-bold" style="font-size:24px;" name="submit-log-in">Submit</button>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

  <!--Instructor Login Form Markup-->

  <div class="row">
    <div class="col-md-6">
     
          </div>

          <!--Student Login Form Markup-->
          <div class="col-md-6">
      
          </div>

</div>





<? include basicfooter.php ?>

<script type="text/javascript">
  
  function changeCard(x,y){
    document.getElementById(x).style.display = 'none';
    document.getElementById(y).style.display = 'grid';

  }
  

</script>