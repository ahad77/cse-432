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
    <title>Report & Transcript</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    
</head>
<body>
<!-- nav bar-->
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

<!-- details-->
<main>


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
</section>
<section>
    <div class="container">
      <div class="row">
        <div class="col-9">
          <h1>Welcom to EDU Blackbox</h1><br><br>
        </div>
        <div class="">
          <h3 class="d-flex justify-content-center nott">Academic Report</h3>
          <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from result  where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
    <div class="container">
        <span style="display-inline"> <b>StudentID :</b> <?php echo $row['id']; ?></span><br><br>
        <span style="display-inline"><b>Cumulative GPA :</b> <?php echo $row['cg']; ?></span><br><br>
        <span style="display-inline"><b>Total Credit Hour :</b> <?php echo $row['total credit']; ?></span><br><br>
        <span style="display-inline"><b>Completed Credit Hour :</b> <?php echo $row['comcredit']; ?></span><br>
        <?php
                  }
                }
?>
        </div><br>
        <div class="">
        <h3 class="d-flex justify-content-center nott">Academic Transcript</h3>
        <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from transcript where id = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
        <div class="container  col-5" style="float:left">
        <h3 class="d-flex justify-content-center nott">Spring '20</h3>
          <span style="display-inline"> <b> CGPA : </b> <?php echo $row['sp20']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Summer '20</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sm20']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Fall '20</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['fall20']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Spring '21</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sp21']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Summer '21</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sm21']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Fall '21</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['fall21']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Spring '22</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sp22']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Summer '22</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sm22']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Fall '22</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['fall22']; ?></span><br><br>

          <h3 class="d-flex justify-content-center nott">Spring '23</h3>
          <span style="display-inline"> <b> CGPA : </b><?php echo $row['sp23']; ?></span><br><br>
            <?php
                  }
                }
?>
          </div>

        </div>
      </div>
    </div>



</section>



</main>




</body>
</html>