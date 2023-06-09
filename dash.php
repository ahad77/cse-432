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
    <title>Dashboard</title>
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


<section class="">
<div class="">
  <div class=" nav-item ">
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
          <h1>Welcom to EDU Blackbox</h1>
        </div>
        <div class="col-8 ">
          <h4><b><a class="aa" href="profile.php">🔻Profile</a></b></h4> <br><br>
          <div class="col-5 ">
            <h6 class="d-flex justify-content-center nott ">Enrolled Courses</h6>
            <?php 
      $ssid = $_SESSION["ssid"];
      $sql = "select * from form where StudentID = $ssid";
      $result = $con->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
      ?>
      <div class="container">
      <span style="display-inline"> <b> Courses : </b> <?php echo $row['Course']; ?></span><br><br>
      
      <?php
                  }
                }
?>
      </div>
          </div>
        </div>
        <div class="col-4 ">
        <h4 class="d-flex justify-content-center nott ">News & Announcements</h4>
          <div>
            <a  class="nt" href="">▪️ Payment Notice 1st Installment, Spring 2023 Masters Program</a><br>
            <a class="nt" href="">▪️ Payment Notice Final Installment, Spring 2023</a><br>
            <a class="nt" href="">▪️ EDU Shuttle Bus Schedule for Holy Ramadan (Friday 24-March 2023)</a><br>
            <a class="nt" href="">▪️ EDU Shuttle Bus Schedule for Holy Ramadan ( Saturday to Thursday)</a><br>
            <a class="nt" href="">▪️ MSc Data Analytics Ramadan Class Routine Spring-2023 Batch 2</a><br>
            <a class="nt" href="">More News...</a><br>
            
          </div>
        </div>
      </div>
    </div>



</section>



</main>




</body>
</html>