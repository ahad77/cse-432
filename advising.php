<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
        header("location: index.php");
        exit;
    }
    else{
        
    }
?>

<?php include("dbcn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advising</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script type="text/javascript"src="multiselect-dropdown.js"></script>
    
</head>
<body>
<header>
    <nav class="nav nav-pills nav-fill">

        <a class="nav-link " aria-current="page" href="dash.php">
            <div class="dlogo">
                <img  src="photos/logo2.png" alt="">
                <img  src="photos/logo1.png" alt="">
            </div>
        </a>
    
        <a class="nav-link disabled">
            
            <div class="viewname">
                <span>
                    <h3><b><?php echo $_SESSION["username"]?></b></h3>
                    <br>
                    <i>student / active</i>
                    <br>
                </span>
            </div>
            <div>
              <li class="nav-item">
                <a class=" btn btn-outline-secondary btn-sm" aria-current="page" href="logout.php"><b>log out</b></a>
              </li> 
            </div>
        </a>
    </nav>
</header><br>
</section>

<section class=" ">
<div class="">
  <div class=" nav-item">
    <div class="nav-link active aria-current="page" col dlogo">
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="advising.php"><b>Advising</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="schedule.php"><b>Schedule</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="finance.php"><b>Finance</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="report.php"><b>Report & Transcript</b></a>
  </li>
</ul>
</div>
</div>
</div>
</section><br><br><br><br><br><br><br>
    
    
    <section class="inform">
    <h4 class="container d-flex justify-content-center nott ">Advising Form</h4><br><br>
    <form class="pp" action="#" method="post">
    <label for="sid">Student Id </label>
    <input id="sid" type="text" placeholder="Enter your student id" name="sid"  pattern="[0-9]{9}" required><br><br>
    <label for="fn">Name</label>
    <input id="fn" type="text" placeholder="Enter your full name" name="name" required><br><br>
    <label for="cn">Contact No</label>
    <input id="cn" type="tel" id="phone" placeholder="Enter your number" name="phone" pattern="[0-9]{11}" required><br><br>
    <label for="mail">Email</label>
    <input id="mail" type="text" placeholder="Enter your EDU email" name="email" pattern="[0-9]{9}@eastdelta.edu.bd" required><br><br>
   
    <label >Semester</label>
    <select name="semester" title="Semester">
    <?php
            $sql ="SELECT `semester` FROM `semester`";
            $result= mysqli_query($con,$sql);
            $num= mysqli_num_rows($result);
            if($num>0)
                while($row =mysqli_fetch_assoc($result)){
                    echo $row['Name'] ;
                    echo "<br>";
                }
          ?>

<?php
              $sql = "select * from Semester where id= '1' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Semester']; ?></option>
        

        <?php
                }
              }
                ?>
    <?php
              $sql = "select * from Semester where id= '2' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Semester']; ?></option>
        

        <?php
                }
              }
                ?>  
                <?php
              $sql = "select * from Semester where id= '3' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Semester']; ?></option>
        

        <?php
                }
              }
                ?>    
    </select><br><br>

    <label >Program</label> 
    <select name="program"  id="current_select_values" class="dropdown" title="Courses">
    <?php
              $sql = "select * from program where id= '1' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>

<?php
              $sql = "select * from program where id= '2' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>
    <?php
              $sql = "select * from program where id= '3' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   
    <?php
              $sql = "select * from program where id= '4' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   
                
                <?php
              $sql = "select * from program where id= '5' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   

<?php
              $sql = "select * from program where id= '6' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   
                <?php
              $sql = "select * from program where id= '7' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   
                <?php
              $sql = "select * from program where id= '8' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>  
                <?php
              $sql = "select * from program where id= '9' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>   
                <?php
              $sql = "select * from program where id= '10' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>    


    </select><br><br>

    <label >Course</label>
    <select name="course" multiple title="Course">
    <?php
              $sql = "select * from Courses where id= '1' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>

<?php
              $sql = "select * from Courses where id= '2' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>
    <?php
              $sql = "select * from Courses where id= '3' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>  
                <?php
              $sql = "select * from Courses where id= '4' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
        <option ><?php echo $row['Courses']; ?></option>
        

        <?php
                }
              }
                ?>    
    </select><br><br>
    
    </section><br><br>
    

<section class="subres">
  <input type="submit" value="Submit" name="register" class="btn" >
  <button type="reset" value="reset">Cancel</button>
</section>
    
    

</form>



</body>
</html>


<?php
  if($_POST['register'])
  {
    $student_id    =  $_POST['sid'];
    $fname         =  $_POST['name'];
    $num           =  $_POST['phone'];
    $email         =  $_POST['email'];
    $semester      =  $_POST['semester'];
    $pgrm          =  $_POST['program'];
    $course        =  $_POST['course'];

    $query = "INSERT INTO form values('$student_id','$fname','$num','$email','$semester','$pgrm','$course')";
    $data = mysqli_query($con,$query);

    if($data)
    {
      echo "Your request has been submitted";
    
    }
    else{
      echo "404 error";
    }

  }

?>

